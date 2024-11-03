<!DOCTYPE html>
<html>
    <head>
        <title>Pemrograman Berorientasi Objek</title>
        <style>
            table{
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 50%
            }
            td,
            th{
                border: 1px solid #dddddd;
                text-align: left;
                padding: 3px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
            </style>

            <head>
                <body>
                    <img src="https://pin.it/3aGLt41yd" width="20%" height="20%"/>
                    <h3>Citra Naia Shabrina: 42423041</h3>
                    <h1 align="center">Pemrograman Berorientasi Objek</h1>
                    <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, 
                    dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. 
                    Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman terstruktur. 
                    Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya,  Model data berorientasi objek dikatakan dapat memberi fleksibilitas yang lebih, 
                    kemudahan mengubah program, dan digunakan luas dalam teknik peranti lunak skala besar. Lebih jauh lagi, pendukung OOP mengklaim bahwa OOP lebih mudah dipelajari bagi pemula dibanding dengan pendekatan sebelumnya, 
                    dan pendekatan OOP lebih mudah dikembangkan dan dirawat.

                    <h1 align="left">Bahasa Pemrograman yang mendukung PBO</h1>
                    <p> Berikut ini adalah bahasa pemrograman yang mendukung OOP antara lain seperti:
                        <ul>
                            <li>Visual Foxpro</li>
                            <li>Java</li>
                            <li>C++</li>
                            <li>Pascal (Bahasa Pemrograman)</li>
                            <li>SIMULA</li>
                            <li>Smalltalk</li>
                            <li>Ruby</li>
                            <li>Phyton</li>
                            <li>PHP</li>
                            <li>TypeScript</li>
                            <li>C#</li>
                            <li>Delphi</li>
                            <li>Eiffel</li>
                            <li>Perl</li>
                            <li>Adobe Flash AS 3</li>
        </ul>

        <h1>Membuat Tabel Kategori Produk</h1>
        <table>
        <tr>
            <th>NO</th>
            <th>KATEGORI PRODUK</th>
            <th>NAMA PRODUK</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bumbu Dapur</td>
            <td>Garam</>
        </tr>
        <tr>
            <td>2</td>
            <td>Bumbu Dapur</td>
            <td>Cabai</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bumbu Dappur</td>
            <td>Lengkuas</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bumbu Dapur</td>
            <td>Terasi</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sembako</td>
            <td>Beras</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sembako</td>
            <td>Minyak goreng</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Sembako</td>
            <td>Gula Pasir</td>
        </tr>
        </table>

        <h1>Membuat Tabel Kategori Produk</h1>
        <table>
        <tr>
            <th>NO</th>
            <th>PRODUK</th>
            <th>STOCK</th>
            <th>HARGA</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Garam</td>
            <td>10</td>
            <td>7000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cabai</td>
            <td>10</td>
            <td>25000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lengkuas</td>
            <td>10</td>
            <td>12000</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Terasi</td>
            <td>10</td>
            <td>35000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Beras</td>
            <td>10</td>
            <td>13000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Minyak Goreng</td>
            <td>10</td>
            <td>15000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Gula Pasir</td>
            <td>10</td>
            <td>13000</td>
        </tr>
        </table>

<h3> PERTEMUAN 3 </h3>        
<?php class Buah {
    //properties
    public $nama;
    public $warna;

    //Methods
    Function set_name ($nama){
        $this->nama = $nama;
    }
    function get_name(){
        return $this->nama;
    }
}

$apel = new Buah();
$pisang = new Buah();
$apel->set_name('apel');
$pisang->set_name('pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
echo "<br>"
?>


<?php
class mobil {
    public $nama;
    public $warna;

    function set_warna($warna){
        $this->warna = $warna;
    }

    function get_warna(){
        return "warna mobil itu adalah".$this->warna;
    }

}
//Membuat objek dari kelas mobil 
$toyota = new mobil();
$toyota->set_warna('Biru Metalik');

//Menampilkan warna
echo $toyota->get_warna();
?>

<p></p>

<h2 style="color: blue;" align="left">Pertemuan-4<h2>
<h3 style="color: black;" align="left"> Konstruktor dan Destruktor</h3>
<h4 style="color: black;" align="left">konstruktor</h4>
<br>
<?php
class fruit{
    public $nama;
    public $warna;

function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
}
function get_name(){
    return $this->nama;
}
function get_warna(){
    return $this->warna;
}
}

$apel = new fruit("Apel", "Merah");
echo $apel->get_name();
echo"<br>";
echo $apel->get_warna();
?>

<h4 style="color:black;" align="left">Destructor</h4>
<?php
class buahhh{
    public $nama;
    public $warna;

    function __construct($nama, $warna){
        $this->nama=$nama;
        $this->warna=$warna;
    }
    function __destruct(){
        echo "buah tersebut adalah {$this-> nama} dan warnanya adalah {$this->warna}.";
    }
}

$apel = new buahhh("apel", "merah");
?>

<h2>TUGAS PERTEMUAN 4</h2>
<?php
$mahasiswi = [
    [
        'nama'=>'naia',
        'tinggi_badan'=>155,
        'warna_kulit'=>'kuning langsat'
    ],
    [
        'nama'=>'salma',
        'tinggi_badan'=>163,
        'warna_kulit'=>'kuning langsat'
    ],
    [
        'nama'=> 'amel',
        'tinggi_badan'=>154,
        'warna_kulit'=>'sawo matang'
    ]
    ];

foreach ($mahasiswi as $mhs){
    echo "Mahasiswi tersebut bernama ". $mhs['nama']. 
    ", tinggi badan ".$mhs['tinggi_badan']."cm, dan warna kulit ".$mhs['warna_kulit']."<br>";
}
?>
</body>
</html>