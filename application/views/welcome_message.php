<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
  padding: 5px;
  text-align: left;
}

i.fa.fa-trash-o {
    color: red;
}
i.fa.fa-pencil-square-o {
    color: #1f1fef;
}

</style>
</head>
<body>

<h2 align="center">Table Caption</h2>
<p align="center">To add a caption to a table, use the caption tag.</p>

<table style="width:50%" align="center">
  <caption>Monthly savings</caption>
  <tr>
    <th>SrNo.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
     <td>$100</td>
      <td>$100</td>
      <td>
      	<a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
      	<a href="<?php echo base_url()?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
       <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
      </td>
  </tr>
  <tr>
    <td>February</td>
    <td>$50</td>
     <td>$100</td>
      <td>$100</td>
       <td>$100</td>
  </tr>
</table>

</body>
</html>

