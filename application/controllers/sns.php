<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sns extends  MY_Controller {

	public function __construct()
    {
      	parent::__construct();
        $this->nsession->userdata("user")  AND redirect();
        $this->load->model("Myuser_model","dao");

    }

	public function session($provider = '')
	{
		$this->config->load('oauth2');
		$allowed_providers = $this->config->item('oauth2');
		if ( ! $provider OR ! isset($allowed_providers[$provider]))
		{
        	$this->nsession->set_flashdata('info', '暂不支持'.$provider.'方式登录.');
            redirect();
            return;
		}
		$this->load->library('oauth2');
		$provider = $this->oauth2->provider($provider, $allowed_providers[$provider]);
        $args = $this->input->get();
        if ($args AND !isset($args['code']))
        {
          	$this->nsession->set_flashdata('info', '授权失败了,可能由于应用设置问题或者用户拒绝授权.<br />具体原因:<br />'.json_encode($args));
            redirect();
            return;
        }
        $code = $this->input->get('code', TRUE);
		if ( ! $code)
		{
                  try
                  {
			         $provider->authorize();
                  }
                  catch (OAuth2_Exception $e)
                  {
                      show_error('认证失败 '.$e);
                  	  $this->nsession->set_flashdata('info', '操作失败<pre>'.$e.'</pre>');
                  }
		}
		else
		{
            $sns_user = null;
            $puser = null;
			try
			{
				$token = $provider->access($code);

	        	$sns_user = $provider->get_user_info($token);

				if (is_array($sns_user))
				{
                    $this->nsession->set_flashdata('info', '登录成功');
                    $puser = $this->dao->getByOpenId($sns_user->uid);
                    if(!$puser){
                        //用户未注册
                        $userdata = array(
                            "id"=>$sns_user['uid'],
                            "openid"=>$sns_user['uid'],
                            "access_token"=>$sns_user['access_token'],
                            "maled"=>true,
                            "name"=>$sns_user['name'],
                            "nick"=>$sns_user['screen_name']
                        );

                        $this->dao->save($userdata);
                        $this->nsession->set_userdata('user', $userdata);
                    }else{
                        $this->nsession->set_userdata('user', $puser);
                    }
				}
				else
				{
                    $this->nsession->set_flashdata('info', '获取用户信息失败');
				}
			}
			catch (OAuth2_Exception $e)
			{
               $this->nsession->set_flashdata('info', '操作失败<pre>'.$e.'</pre>');
			}
		}
        redirect();
	}



    public function fireLog($msg=""){
        $this->firephp->log($msg);
    }
}

/* End of file sns.php */
/* Location: ./application/controllers/sns.php */