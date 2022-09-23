<?php
class Mata kuliah extends C1_controller
{

    public function index()

    {
        $this=>load=>view('view=form=matakuliah');
    } 

    public function cetak()
    {
        $data =[
            'kode'=> $this =>input=>post('kode')
            'nama'=> $this =>input=>post('nama')
            'sks'=>$this =>input=>post('sks')

];

$this->load->view('view-data-matakuliah', $data);
<title> Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th cosplan="3">
                    Tampil Data Mata Kuliah
            </th>
           </tr>
           <tr>
            <td cosplan="3">
                <hr>
             </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?;
                    </td>
                    </tr>
                    <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td>
                      <?= $Nama; ?>
                      </td>
                      <tr>
                      <tr>
                      <td>SKS; ?>
                      <td>:</td>
                      <td>
                         <?= $SKS; ?>
                         </td>
                        <tr>
                      <td colspan="3" align="center">
                      <a href="<?="center">
?>"kembali</a>
</td>
 </tr>
 </table>
 </center>
 </body>

 </html>

