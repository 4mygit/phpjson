<html xmlns:th="http://www.thymeleaf.org">

<body>



<h1>Multiple file upload example - AJAX</h1>



<form method="POST" enctype="multipart/form-data" id="fileUploadForm">


    <input type="file" name="file"/><br/><br/>

    <input type="submit" value="Submit" id="btnSubmit"/>

</form>



<h1>Ajax Post Result</h1>

<pre>

    <span id="result"></span>

</pre>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





<script>

    $(document).ready(function () {



        $("#btnSubmit").click(function (event) {



            //stop submit the form, we will post it manually.

            event.preventDefault();



            fire_ajax_submit();



        });



    });



            function fire_ajax_submit() {



            // Get form

            var form = $('#fileUploadForm')[0];



            var data = new FormData(form);

                
            let valdata = '{"sendimage":' + data + '}';

            

           // data.append("CustomField", "This is some extra data, testing");

                console.log('valdata');

            $("#btnSubmit").prop("disabled", true);



            $.ajax({

                type: "POST",

                enctype: 'multipart/form-data',

                url: "http://localhost/jsonfileupld/api-file-upload.php",

                data: valdata,

                dataType: 'json',

                processData: false,

                contentType: false,

                cache: false,

                success: function (data) {



                    $("#result").text(data);

                    console.log("SUCCESS : ", data);

                    $("#btnSubmit").prop("disabled", false);



                },

                error: function (e) {



                    $("#result").text(e.responseText);

                    console.log("ERROR : ", e);

                    $("#btnSubmit").prop("disabled", false);



                }

            });



            }

            </script>

            </body>

            </html>

