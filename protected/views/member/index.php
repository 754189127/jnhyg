<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>
<div class="searchBar">
    <form>
        <table>
            <tr>
                <td>期数：<select id="periodicalId"></select></td>
                <td>厂商编号：<input id="companyCode1"/>-<input  id="companyCode2"/></td>
                <td>地址：<input id="address" /></td>
                <td>邮箱：<input  id="email"/></td>
                <td><input  type="button" value="搜索"  id="searchBt" /> <input  type="reset" value="重置"/></td>
            </tr>
        </table>
    </form>
</div>

<div class="form">
    <div  class="panel-default" id="panel-title"><span>厂商管理列表</span></div>
    <div class="table-list" id="table-list">

    </div>
    <div class="buttonBar">
        <input class="btn-button" id="addCompany"  type="button" value="A添加"  />
        <input class="btn-button"  type="button" value="导入"  />
        <input class="btn-button"  type="button" value="打印"  />
        <input class="btn-button"  type="button" value="复制"  />
    </div>
</div>
<script>

    $(document).ready(function(){
        $(".flexme2").tableSorter({headers: {0:{ sorter: false}}});
    })

    $('.flexme2').flexigrid({
        height : 'auto',
        striped : false
    });
    ajaxGetperiodical(0);
    ajaxsLoadList();
    function ajaxsLoadList(){
        var periodicalId = $("#periodicalId").val(),
            companyCode1 = $("#companyCode1").val(),
            companyCode2 = $("#companyCode2").val(),
            address = $("#address").val(),
            email = $("#email").val();
        if(periodicalId==0){
            alert('请选择期数');return false;
        }
        $.ajax({
            url:'<?php echo $this->createUrl("company/search")?>',
            type:'post',
            data:{'periodicalId':periodicalId,'companyCode1':companyCode1,'companyCode2':companyCode2,'address':address,'email':email},
            success:function(data){
                $("#table-list").html(data);
            }
        });
    }


    //搜索
    $("#searchBt").click(function(){
        ajaxsLoadList();
    });

    //添加
    $("#addCompany").click(function(){
        art.dialog({
            content: '如果定义了回调函数才会出现相应的按钮',
            button: [
                {
                    name: '同意',
                    callback: function () {
                        this.content('你同意了').time(2);
                        return false;
                    },
                    focus: true
                },

                {
                    name: '关闭'
                }
            ]

        });
    });

</script>