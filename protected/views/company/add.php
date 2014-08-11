<div class="form">
<table class="percent100">
    <tr>
        <td>
            <div class="panel-default width250"><span>添加厂商</span></div>
            <div class="borderDiv ">
                <form id="addCompany">
                <table class="width250 ">
                <tr>
                    <th>期数:</th>
                    <td><select id="periodicalId" name="periodicalId"><option value="0">请选择期数</option></select> </td>
                </tr>
                <tr>
                    <th>厂商编号：</th>
                    <td> <input name="companyCode" readonly="true" type="text" /></td>
                </tr>
                <tr>
                    <th>厂商名称：</th>
                    <td> <input name="title" type="text" value="" /></td>
                </tr>
                <tr>
                    <th>联系人：</th>
                    <td> <input name="linkMan" type="text" /></td>
                </tr>
                <tr>
                    <th>地址：</th>
                    <td> <input name="address" type="text" /></td>
                </tr>
                <tr>
                    <th>厂商类型：</th>
                    <td><select id="type" name="type"><option value="0"></option></select> </td>
                </tr>
                <tr>
                    <th>邮编：</th>
                    <td> <input name="zipCode" type="text" /></td>
                </tr>
                <tr>
                    <th>电话1：</th>
                    <td> <input name="mobile1" type="text" /></td>
                </tr>
                <tr>
                    <th>电话2：</th>
                    <td> <input name="mobile2" type="text" /></td>
                </tr>
                <tr>
                    <th>邮箱：</th>
                    <td> <input name="email" type="text" /></td>
                </tr>
                <tr>
                    <th>网址：</th>
                    <td> <input name="website" type="text" /></td>
                </tr>
                <tr>
                    <th>qq：</th>
                    <td> <input name="qq" type="text" /></td>
                </tr>
                <tr>
                    <th>传真：</th>
                    <td> <input name="fax" type="text" /></td>
                </tr>
                <tr>
                    <th>备注：</th>
                    <td> <input name="remark" type="text" /></td>
                </tr>
            </table>
                </form>
            </div>
        </td>
        <td>
            <div class="ml10">
             <div>类型选择：<select id="jzsType"><?foreach($jzsType as $k=>$v){?><option value="<?php echo $k?>"><?php echo $v?></option><?}?></select></div>
            <div class="panel-default width250"><span>进转损</span></div>
            <table class="tb-simple ">
                <tr>
                    <th>类型</th>
                    <th>编号</th>
                    <th>日期</th>
                    <th>金额</th>
                </tr>
                <tbody id="datalist">

                </tbody>
            </table>
            </div>
        </td>
    </tr>

</table>

</div>

