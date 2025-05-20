<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>js1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function tambah(){
            var a = document.getElementById("bil1").value;
            var b = document.getElementById("bil2").value;
            var c = Number.parseInt(a) + Number.parseInt(b);
            document.getElementById('hasil').innerHTML=c;
        }
        function validasi(){
            var nama=document.getElementById('nrp').value;
            var nrp=document.getElementById('nama').value;
            // if(nrp.length==0){
            //     swal("pesan",'nama harus diisi','error')
            //     document.getElementById('nama').focus();
            //     return false;
            // }
            if(nama.length!=10&&nama.length>10&&nama){
                swal("pesan",'nama harus diisi dengan digit 10 masih lebih dari 10','error')
                document.getElementById('nrp').focus();
                return false;
            }
            if(nama.length!=10&&nama.length<10){
                swal("pesan",'nama harus diisi dengan digit kurang dari 10','error')
                document.getElementById('nrp').focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <p>
            <form id="frmdaftar" method="get" action="https://google.com" onsubmit="return validasi();">
                Nrp :
                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="isikan 10 digit nrp">
                <br>
                Nama :
                <input type="text" class="form-control" id="nama" name='nama' placeholder="isikan nama">
                <br>
                <input type="submit" class="btn btn-success"  value="Daftar"></input>
            </form>
        </p>
    </div>
</body>
</html>
