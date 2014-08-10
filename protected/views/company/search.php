<table class="flexme2" >
  <thead>
  <tr>
      <th>厂商编号</th>
      <th>厂商名称</th>
      <th>联系人</th>
      <th>地址</th>
      <th>电话1</th>
      <th>电话2</th>
      <th>邮箱</th>
  </tr>
   </thead>
<tbody  id="datalist">
  <?php foreach($list as $row){?>
  <tr>
      <td><?php echo $row['companyCode']?></td>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['linkMan']?></td>
      <td><?php echo $row['address']?></td>
      <td><?php echo $row['mobile1']?></td>
      <td><?php echo $row['mobile2']?></td>
      <td><?php echo $row['email']?></td>
  </tr>
    <?php }?>
    </tbody>
</table>

<script>
 $(document).ready(function(){  
      $(".flexme2").tableSorter({headers: {0:{ sorter: false}}});  
 })  
		
$('.flexme2').flexigrid({
	height : 'auto',
	striped : false
});</script>
                   