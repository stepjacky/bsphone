<script type="text/javascript" src="/resources/jquerytdnd/jquery.tablednd.js"></script>
<form id="priceForm">

<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>型号</th>
        <th>价格</th>
        <th>管理</th>
    </tr>

    </thead>

    <tbody id="pbody">
       <?php
       $i=1;

       foreach($prices as $price):?>
       <?php extract($price);?>

       <tr id="<?=$i++?>"  bizPk='<?=$id?>'>
           <input type='hidden' name='sort[]' value="<?=$sort?>" />
           <td>
             <input type="text" name="name[]" value="<?=$name?>" />

           </td>
           <td>
             <input type="text" name="price[]" value="<?=$price?>" />

           </td>

           <td>
               <button
                   onclick="$(this).parent().parent().remove()"

                       type="button" class="btn btn-danger">
                   <i class="icon-remove icon-white"></i>

               </button>

           </td>

        </tr>

       <? endforeach;?>
    </tbody>
    <tfoot>
      <tr>

          <td>
              <button class="btn" type="button" onclick="addPriceItem('<?=$phone?>')">增加项</button>

          </td>

          <td>

              <button class="btn btn-success" type="button" onclick="sumitPrice()">保存价格</button>

          </td>

          <td></td>

      </tr>


    </tfoot>
</table>
</form>

<script type="text/javascript">
    var lastsort = '<?=$i+1?>';
    var tr = $("<tr></tr>");
    var name  = "<td><input type='text' name='name[]' /></td>";
    var price = "<td><input type='text' name='price[]' /></td>";
    var sort = "<input type='hidden' name='sort[]' value='"+lastsort+"' />";
    var btn = "<td><button  onclick='$(this).parent().parent().remove()' type='button' class='btn btn-danger'> <i class='icon-remove icon-white'></i></button></td>";

    tr.append(name);
    tr.append(price);
    tr.append(btn);
    tr.append(sort);


    function addPriceItem(phone){
         $("#pbody").append(tr.clone());
    }

    function sumitPrice(){
        var data = $("form#priceForm").serialize();
        $.post("/phone/save_price/<?=$phone?>",data,function(){
           alert("价格信息已保存");
        });
    }
    $("#pbody").tableDnD({
        serializeParamName:'sort',
        onDrop:function(table,row){
            var data  =  $.tableDnD.serialize();
            $.post('/phone/sortedprice',data,function(html){
                console.log(html);
            })

        }
    });
</script>