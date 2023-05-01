<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Welcome To Dashboard</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td><a href="logout" style="color:dodgerblue">Logout</a></td>
  </tr>
</table>

</body>
</html>

