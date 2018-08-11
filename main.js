

$(document).ready(function() {
    cat();
    brand();
    product();
    function cat() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: { category: 1 },
            success: function(data) {
                $("#get_category").html(data);
            },
            error: function () {
            	alert('hey thereerror');
            }
        });

    }

    function brand() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: { brand: 1 },
            success: function(data) {
                $("#get_brand").html(data);
            },
            error: function () {
            	alert('error');
            }
        });

    }

    function product(){
        $.ajax({
            url :"action.php",
            method: "POST",
            data :{getProduct:1},
            success :function(data){
                $("#get_product").html(data);
            }
        });
    }
    $("body").delegate(".category","click",function(event){
        event.preventDefault();
        var cid= $(this).attr('cid');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_selected_Category:1, cat_id:cid},
            success:function(data){
                 $("#get_product").html(data);
            }
        })
    })

    $("body").delegate(".selectBrand","click",function(event){
        event.preventDefault();
        var bid= $(this).attr('bid');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{selectBrand:1,brand_id:bid},
            success:function(data){
                 $("#get_product").html(data);
            }
        })
    })

    $("#search-btn").click(function(){
        var keyword= $("#search").val();
        if (keyword != "") {
             $.ajax({
            url:"action.php",
            method:"POST",
            data:{search:1,keyword:keyword},
            success:function(data){
                 $("#get_product").html(data);
            }
        });
        }
    })
    
    
$("#signup_button").click(function (event) {
     event.preventDefault();
     $.ajax({
        url:"register.php",
        method:"POST",
        data: $("form").serialize(),
        success:function(data){
            $("#signup_msg").html(data);
        }

     })

}) 
  


    $("#login").click(function(event){
        event.preventDefault();

        var email= $("#email").val();
        var pass=$("#password").val();
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{userLogin:1,userEmail:email,userPassword:pass},
            success:function (data) {
                
                window.location.href="profile.php";
            
            }
        })
    })
  

        $("body").delegate("#product","click",function(event){
            event.preventDefault();            
            var p_id= $(this).attr('pid');
            alert(p_id);

        })




    })
   

