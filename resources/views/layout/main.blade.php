<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://unpkg.com/tabulator-tables@4.0.5/dist/css/tabulator.min.css" rel="stylesheet">
    <style>
        .tabulator-col-title {
          text-align: center;
        }
    </style>
    <title>@yield('title')</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="#">CRUD Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              <a class="nav-link" href="{{ url('/about') }}">About</a>
              <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
              <a class="nav-link" href="{{ url('/students') }}">Students</a>
              <a class="nav-link" href="{{ url('/upload') }}">Upload</a>
              <a class="nav-link" href="{{ url('/searchapi') }}">Search Api</a>
              <a class="nav-link" href="{{ url('/autodata') }}">Form Autofill</a>
              <a class="nav-link" href="{{ url('/tabulator') }}">Tabulator</a>
            </div>
          </div>
      </div>
    </nav>

    @yield('container')

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.0.5/dist/js/tabulator.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript">
        // var tabledata = [{
        //         playerid: 1,
        //         playername: "Virat Kohli",
        //         price: "17",
        //         team: "RCB",
        //         joiningdate: "01/01/2020"
        //     }, {
        //         playerid: 2,
        //         playername: "Rohit Sharma",
        //         price: "15",
        //         team: "MI",
        //         joiningdate: "02/01/2020"
        //     }, {
        //         playerid: 3,
        //         playername: "MS Dhoni",
        //         price: "15",
        //         team: "CSK",
        //         joiningdate: "03/01/2020"
        //     }, {
        //         playerid: 4,
        //         playername: "Shreyas Iyer",
        //         price: "7",
        //         team: "RCB",
        //         joiningdate: "04/01/2020"
        //     }, {
        //         playerid: 5,
        //         playername: "KL Rahul",
        //         price: "11",
        //         team: "KXIP",
        //         joiningdate: "05/01/2020"
        //     }, {
        //         playerid: 6,
        //         playername: "Dinesh Karthik",
        //         price: "7",
        //         team: "KKR",
        //         joiningdate: "06/01/2020"
        //     }, {
        //         playerid: 7,
        //         playername: "Steve Smith",
        //         price: "12",
        //         team: "RR",
        //         joiningdate: "07/01/2020"
        //     }, {
        //         playerid: 8,
        //         playername: "David Warner",
        //         price: "12",
        //         team: "SRH",
        //         joiningdate: "08/01/2020"
        //     }, {
        //         playerid: 9,
        //         playername: "Kane Williamson",
        //         price: "3",
        //         team: "SRH",
        //         joiningdate: "09/01/2020"
        //     }, {
        //         playerid: 10,
        //         playername: "Jofra Archer",
        //         price: "7",
        //         team: "RR",
        //         joiningdate: "10/01/2020"
        //     }, {
        //         playerid: 11,
        //         playername: "Andre Russell",
        //         price: "9",
        //         team: "KKR",
        //         joiningdate: "11/01/2020"
        //     }, {
        //         playerid: 12,
        //         playername: "Chris Gayle",
        //         price: "2",
        //         team: "KXIP",
        //         joiningdate: "12/01/2020"
        //     },
        //   ];

          var editIcon = function(cell, formatterParams, onRendered){ //plain text value
              return "<button class='btn btn-info'>Edit</button>";
          };

          var deleteIcon = function(cell, formatterParams, onRendered){ //plain text value
              return "<button class='btn btn-danger'>Delete</button>";
          };

      //   var table = new Tabulator("#players", {
      //     height: 220,
      //     data: tabledata,
      //     layout: "fitColumns",
      //     pagination:"local",
      //     paginationSize:5,
      //     tooltips:true,
      //     columns:[
      //       {title:"Name", field:"playername", sorter:"string", width:200, editor:true},
      //       {title:"Price", field:"price", sorter:"number", align:"left", formatter:"progress"},
      //       {title:"Team", field:"team", sorter:"string", editor:"select", headerFilter:true, headerFilterParams: {
      //                 "RCB": "RCB",
      //                 "MI": "MI",
      //                 "KKR": "KKR",
      //       }},
      //       {title:"Join Date", field:"joiningdate", sorter:"date", align:"center"},
      //       {formatter:editIcon, width:40, hozAlign:"center", width:200, cellClick:function(e, cell){
      //         location.href = "/students/" + cell.getRow().getData().playerid + "/edit"
      //       }},
      //     ],
      // });

        var table = new Tabulator("#players", {
            height: 220,  
            data: tabledata,
            layout: "fitColumns",
            pagination:"local",
            height:"100%",
            paginationSize:5,
            tooltips:true,
            columns:[
              {title:"Name", field:"nama", sorter:"string", headerFilter:true},
              {title:"NRP", field:"nrp", sorter:"string"},
              {title:"Email", field:"email", sorter:"string"},
              {title:"Jurusan", field:"jurusan", sorter:"string", editor:"select", headerFilter:true, headerFilterParams: {
                        "Sistem Komputer": "Sistem Komputer",
                        "Sistem Informasi": "Sistem Informasi",
                        "Manajemen Informatika": "Manajemen Informasi",
              }},
              {title:"Action", 
                columns:[
                  {formatter:editIcon, width:40, hozAlign:"center", align:"center", headerSort:false, width:100, cellClick:function(e, cell){
                    location.href = "/students/" + cell.getRow().getData().id + "/edit"
                  }},
                  {formatter:deleteIcon, width:40, hozAlign:"center", align:"center", headerSort:false, width:100, cellClick:function(e, cell){
                    location.href = "/students/" + cell.getRow().getData().id + "/delete"
                  }},
                ]
              },
            ],
        });


        // var ean = "1";

        // $.ajax({
        //     url:"{{url('/tabulator/fetchdata')}}",
        //     method:"POST",
        //     data:{ean:ean},
        //     dataType:"JSON",
        //     success:function(data)
        //     {                          
        //         table.setData(data); 
        //         //alert("sukses");                          
        //     },
        //     error: function(req, err){ console.log('my message: ' + err);}
        // }); 

        $(document).ready(function (e) {

          
          
          $('#image').change(function(){
                    
            let reader = new FileReader();
        
            reader.onload = (e) => { 
        
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
        
            reader.readAsDataURL(this.files[0]); 
          
          });

          //membuat autocomplete pada kolom nrp
          $('#nrp_code_id').keyup(function(){
            
            var query = $(this).val();
            if(query!=''){
             var _token = $('input[name="_token"]').val();
               $.ajax({
                  url:"{{url('/autodata/fetch')}}",
                  method:"POST",
                  data:{query:query, _token:_token},
                  success:function(resultfromserver){
                    $('#autocompleteresultlist').fadeIn(5);
                    $('#autocompleteresultlist').html(resultfromserver);
                    //alert(resultfromserver);
                  }
              })
            }
          });

          //memasang autocomplet yang dipilih pada kolom nrp
          $(document).on('click', '.dropdown-item',function(){
            $('#nrp_code_id').val($(this).text());
            $('#autocompleteresultlist').fadeOut();
          });

          //menyembunyikan autocomplete ketika klik sembarang
          $(document).on('click', function (e) {
              if ($(e.target).closest("#nrp_code_id").length === 0) {
                  $("#autocompleteresultlist").hide();
              }
          });
          
          //set data di kolom nama dan email
          $('#get-data-id').on('click', function(){
            var valueofnrpcode = $('#nrp_code_id').val();
            var _token = $('input[name="_token"]').val();

            if(valueofnrpcode != ''){
              $.ajax({
                  url: "{{url('/autodata/inquiryroutername')}}",
                  method: "POST",
                  data:{valueofnrpcode:valueofnrpcode, _token:_token},
                  success: function(response){
                    console.log(response);
                    $('#nama').val((response)[0].nama);
                    $('#email').val((response)[0].email);
                    //alert('cekk');
                  }
              });
            }
          });
        });
    
    </script>
  </body>
</html>