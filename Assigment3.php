

<?php
$students = [
['stdNO' => '20003',
'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGAP' => 88.7
], [
'stdNO' => '30304',
'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGAP' => 78.5
], [
'stdNO' => '10005',
'stdName' => 'Bilal Hmaza', 'stdEmail' => 'bilal@gmail.com', 'stdGAP' => 95.7
], [
'stdNO' => '10006',
'stdName' => 'Said Ali', 'stdEmail' => 'said@gmail.com', 'stdGAP' => 93.2
], [
'stdNO' => '10007',
'stdName' => 'Mohammed ahmed', 'stdEmail' => 'mohamed@gmail.com', 'stdGAP' => 98.7
], [
'stdNO' => '10008',
'stdName' => 'Ahmed mohammed ', 'stdEmail' => 'ahmad@gmail.com', 'stdGAP' => 88.7
], [
'stdNO' => '10009',
'stdName' => 'Haney Asad', 'stdEmail' => 'haney@gmail.com', 'stdGAP' => 91.6
], [
'stdNO' => '10010',
'stdName' => 'saeed Hasan', 'stdEmail' => 'saeed@gmail.com', 'stdGAP' => 73.7
], [
'stdNO' => '10011',
'stdName' => 'Ali ahmad', 'stdEmail' => 'ali@gmail.com', 'stdGAP' => 69.6
], [
'stdNO' => '10012',
'stdName' => 'Omer mohammed', 'stdEmail' => 'omer@gmail.com', 'stdGAP' => 73.1
]
];

$searchbyname = '';
if(isset($_GET['name'])){
    $searchbyname = strtolower(trim($_GET['name']));
    $students = array_filter($students, function($student) use ($searchbyname){
        return strpos(strtolower($student['stdName']), $searchbyname) !== false;
    });}
    $searchbyid = '';
if(isset($_GET['id'])){
    $searchbyid = strtolower(trim($_GET['id']));
    $students = array_filter($students, function($student) use ($searchbyid){
        return strpos(strtolower($student['stdNO']), $searchbyid) !== false;
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #00c6ff, #0072ff);
        animation: gradientBG 10s ease infinite;
        padding: 30px;
    }
    
    .container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        width: 80%;
        max-width: 900px;
        margin: 0 auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #f0f8ff;
    }
    th, td {
        border: 1px solid #3498db;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #3498db;
        color: white;
    }
    input[type="text"] {
        padding: 8px;
        width: 200px;
        margin-right: 10px;
        border-radius: 5px;
        border: 1px solid #3498db;
    }
    button {
        padding: 8px 15px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #2980b9;
    }
    @keyframes gradientBG {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}}
</style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-3">Students Information</h2>
        <form method="get">
    <input type="text" name="name" placeholder="Search by Name" value="<?php echo htmlspecialchars($searchbyname); ?>">
    <button type="submit">Search</button>
</form>
 <form method="get">
    <input type="text" name="id" placeholder="Search by Id" value="<?php echo htmlspecialchars($searchbyid); ?>">
    <button type="submit">Search</button>
</form>
    <table class="table table-dark">
  <thead>
    <tr>
       <th>#</th>
      <th scope="col">Student NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
       <th scope="col">GAP</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $count=1;
    foreach($students as $student):?>
    <tr>
      <td><?php echo $count++; ?></td>
      <td><?php echo $student['stdNO']; ?></td>
      <td><?php echo $student['stdName']; ?></td>
      <td><?php echo $student['stdEmail']; ?></td>
      <td><?php echo $student['stdGAP']; ?></td>
    </tr>
  <?php endforeach;?>
   <p>Students Nummber: <?php echo count($students); ?></p>
    </div>
  </tbody>
</table>
    
</body>
</html>
