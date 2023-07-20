var url = window.location.pathname;

$(document).ready(function(){
    $(".ik-search-btn").click(function(e){
        e.preventDefault();
        $("#header-search").slideToggle();
     })
     $(".ik-ham-btn").click(function(e){
         e.preventDefault();
         $("#ik-nav").slideToggle();
     })
     $("#ik-login-btn").click(function(e){
         $("#ik-login").fadeIn();
     })
     $(".ik-login-btn-close").click(function(e){
         $(".ik-lr-modal").fadeOut();
     })
     $("#ik-register-btn").click(function(e){
         $("#ik-register").fadeIn();
     })
    $("#btnRegister").click(function(){
        var error=0;
        var nameField = $("#tbname")
        var nameValue = nameField.val()
        var nameRegEx = /^[A-Z][a-z]{2,15}(\s[A-Z][a-z]{2,15})?$/
        checkRegex(nameRegEx, nameField, nameValue)

        var lastField = $("#tblast")
        var lastValue = lastField.val()
        var lastRegEx = /^[A-Z][a-z]{2,15}(\s[A-Z][a-z]{2,15})?$/
        checkRegex(lastRegEx, lastField, lastValue)

        var userField = $("#tbUserName")
        var userValue = userField.val()
        var userRegEx = /^[a-z0-9]{3,15}$/;
        checkRegex(userRegEx, userField, userValue)

        var emailField = $("#tbmail");
        var emailValue = emailField.val();
        var emailRegEx = /^[a-z][\w\.\-]+\@[a-z0-9]{2,15}(\.[a-z]{2,4}){1,2}$/;
        checkRegex(emailRegEx, emailField, emailValue);

        var adressField = $("#tbAdress");
        var adressValue = adressField.val();
        var adressRegEx = /^[A-ZČĆŠĐŽ][a-zčćšđž]{2,15}(\s[A-ZČĆŠĐŽ][a-zčćšđž]{2,15})?\s[1-9]([0-9])?([0-9])?$/
        checkRegex(adressRegEx, adressField, adressValue);

        var passFiled = $("#tbPass")
        var passValue = passFiled.val()
        var passRegEx = /^[a-zA-Z0-9~!@#$%^&*()_+{}]{8,20}$/
        checkRegex(passRegEx,passFiled,passValue)

        if($("#tbCon").val() != "" && $("#tbCon").val() == passValue){
            insertSuccess($("#tbCon"))
        }else{
            error++
            insertDanger($("#tbCon"))
        }

        if(error == 0){
            var data = {
                "first": nameValue,
                "last": lastValue,
                "user": userValue,
                "email": emailValue,
                "adress": adressValue,
                "password": passValue,
                "btn": true
            }
            ajaxCB("checkRegistracion.php", data,"POST");
        }

        function checkRegex(reg, field, value){
            if(reg.test(value)){
                insertSuccess(field);
            }else{
                error++
                insertDanger(field);
            }
        }
        function insertSuccess(field){
            field.next().remove()
            $("<p class='ik-no-margin-bot ik-alert alert-success'><i class='fas fa-check-circle'></i></p>").insertAfter(field);
        }
        function insertDanger(field){
            field.next().remove()
            $("<p class='ik-no-margin-bot ik-alert alert-danger'><i class='fas fa-check-circle'></i></p>").insertAfter(field);
        }
    })
    $("#btnLogin").click(function(){
        var error=0;
        var passFiled = $("#tbpass")
        var passValue = passFiled.val()
        var passRegEx = /^[a-zA-Z0-9~!@#$%^&*()_+{}]{8,20}$/
        checkRegex(passRegEx,passFiled,passValue)

        var userField = $("#tbUsername")
        var userValue = userField.val()
        var userRegEx = /^[a-z0-9]{3,15}$/;
        checkRegex(userRegEx, userField, userValue)
        
        if(error == 0){
            var data = {
                "username": userValue,
                "password": passValue,
                "btn": true
            }

            ajaxCB("checkLogin.php", data, "POST");
        }

        function checkRegex(reg, field, value){
            if(reg.test(value)){
                insertSuccess(field);
            }else{
                error++
                insertDanger(field);
            }
        }
        function insertSuccess(field){
            field.next().remove()
            $("<p class='ik-no-margin-bot ik-alert alert-success'><i class='fas fa-check-circle'></i></p>").insertAfter(field);
        }
        function insertDanger(field){
            field.next().remove()
            $("<p class='ik-no-margin-bot ik-alert alert-danger'><i class='fas fa-check-circle'></i></p>").insertAfter(field);
        }
    })
     if(url=="/projects/PHP1-sajt/panelAdd.php"){
         $(".ik-delete-brand-btn").click(function(e){
            var error=0
            e.preventDefault()
            var x = $("#panBrand").val()
            if(x==0){
                error++
                $("#panBrand").next("p").remove()
                $("<p class='alert alert-danger'>You have to choose Brand!</p>").insertAfter($("#panBrand"))
            }else{
                $("#panBrand").next("p").remove()
            }
            if(error==0){
                data = {
                    "id":x,
                    "nameId": "brands",
                    "key":"brand_id",
                    "btn": true
                }
                ajaxCB("deleteCategories.php",data,"POST");
            }
         })
         $(".ik-delete-size-btn").click(function(e){
            var error=0
            e.preventDefault()
            var x = $("#panSize").val()
            if(x==0){
                error++
                $("#panSize").next("p").remove()
                $("<p class='alert alert-danger'>You have to choose size!</p>").insertAfter($("#panSize"))
            }else{
                $("#panSize").next("p").remove()
            }
            if(error==0){
                data = {
                    "id":x,
                    "nameId": "sizes",
                    "key":"size_id",
                    "btn": true
                }
                ajaxCB("deleteCategories.php",data,"POST");
            }
         })
         $(".ik-delete-cat-btn").click(function(e){
            var error=0
            e.preventDefault()
            var x = $("#panCat").val()
            if(x==0){
                error++
                $("#panCat").next("p").remove()
                $("<p class='alert alert-danger'>You have to choose category!</p>").insertAfter($("#panCat"))
            }else{
                $("#panCat").next("p").remove()
            }
            if(error==0){
                data = {
                    "id":x,
                    "nameId": "categories",
                    "key":"category_id",
                    "btn": true
                }
                ajaxCB("deleteCategories.php",data,"POST");
            }
         })
         var reg = /^[A-Z][a-z]{2,15}$/
         $(".ik-add-brand-btn").click(function(e){
             e.preventDefault()
             var val = $("#addBrand").val()
             var f = $("#addBrand")
             if(reg.test(val)){
                f.next("p").remove()
                data={
                    "btn": true,
                    "name":"brand_name",
                    "value":val,
                    "tableName": "brands"
                }
                ajaxCB("insertCategories.php", data, "POST")
             }
             else{
                 f.next("p").remove()
                $("<p class='alert alert-danger'>First letter must be upper, length at least 3 up to 15 characters</p>").insertAfter(f)
             }

             
         })
         $(".ik-add-size-btn").click(function(e){
            e.preventDefault()
             var val = $("#addSize").val()
             var f = $("#addSize")
             var regEx = /^([1-9][0-9])|[A-Z][a-z]{2,15}$/
             if(regEx.test(val)){
                f.next("p").remove()
                data={
                    "btn": true,
                    "name":"size_name",
                    "value":val,
                    "tableName": "sizes"
                }
                ajaxCB("insertCategories.php", data, "POST")
             }
             else{
                 f.next("p").remove()
                $("<p class='alert alert-danger'>Can be model of tires(13-22) or full name of tire</p>").insertAfter(f)
             }
        })
        $(".ik-add-cat-btn").click(function(e){
            e.preventDefault()
            var val = $("#addCat").val()
            var f = $("#addCat")
            if(reg.test(val)){
               f.next("p").remove()
               data={
                   "btn": true,
                   "name":"category_name",
                   "value":val,
                   "tableName": "categories"
               }
               ajaxCB("insertCategories.php", data, "POST")
            }
            else{
                f.next("p").remove()
               $("<p class='alert alert-danger'>First letter must be upper, length at least 3 up to 15 characters</p>").insertAfter(f)
            }
        })
        $(".ik-edit-brand-btn").click(function(e){
            e.preventDefault()
            var x = $("#panBrand");
            var y = x.val();
            var z = $("#panBrand option:selected").text()
            console.log(z)
            if(y==0){
                $("#panBrand").next("p").remove()
                $("<p class='alert alert-danger'>You have to choose brand!</p>").insertAfter($("#panBrand"))
            }else{
                $("#panBrand").next("p").remove()
                $("#ik-edit-modal").fadeIn()
                $("#ik-catt-edit").val(z)
                $(".ik-edit-modal-close").click(function(e){
                    e.preventDefault()
                    $("#ik-edit-modal").fadeOut()
                })
                $("#ik-btn-edit-cat").click(function(e){
                    var data = {
                        "id":y,
                        "tableName":"brands",
                        "name":"brand_name",
                        "idd": "brand_id",
                        "btn":true,
                        "value": $("#ik-catt-edit").val()
                    }
                    ajaxCB("updateCategories.php", data, "POST");
                })

            }
            
        })
        $(".ik-addprod-btn").click(function(){
            $("#ik-edit-prod-modal").fadeIn();
            $(".ik-edit-modal-btn-close").click(function(){
                $("#ik-edit-prod-modal").fadeOut();
            })
            $("#btnEditProd").click(function(){

                var data = {
                    "btn": true,
                    "tbProdName": $("#tbProdName").val(),
                    "tbImgAlt": $("#tbImgAlt").val(),
                    "prodDes": $("#prodDes").val(),
                    "prodPN": $("#prodPN").val(),
                    "prodPO": $("#prodPO").val(),
                }
                ajaxCB("addProd.php", data, "POST")
            })
        })
        $(".ik-edit-cat-btn").click(function(e){
            e.preventDefault()
            var x = $("#panCat");
            var y = x.val();
            var z = $("#panCat option:selected").text()
            console.log(z)
            if(y==0){
                $("#panCat").next("p").remove()
                $("<p class='alert alert-danger'>You have to choose category!</p>").insertAfter($("#panCat"))
            }else{
                $("#panCat").next("p").remove()
                $("#ik-edit-modal").fadeIn()
                $("#ik-catt-edit").val(z)
                $(".ik-edit-modal-close").click(function(e){
                    e.preventDefault()
                    $("#ik-edit-modal").fadeOut()
                })
                $("#ik-btn-edit-cat").click(function(e){
                    var data = {
                        "id":y,
                        "tableName":"categories",
                        "name":"category_name",
                        "idd": "category_id",
                        "btn":true,
                        "value": $("#ik-catt-edit").val()
                    }
                    ajaxCB("updateCategories.php", data, "POST");
                })

            }
            
        })
        $(".ik-edit-size-btn").click(function(e){
            e.preventDefault()
            var x = $("#panSize");
            var y = x.val();
            var z = $("#panSize option:selected").text()
            console.log(z)
            if(y==0){
                $("#panSize").next("p").remove()
                $("<p class='alert alert-danger'>You have to choose brand!</p>").insertAfter($("#panSize"))
            }else{
                $("#panSize").next("p").remove()
                $("#ik-edit-modal").fadeIn()
                $("#ik-catt-edit").val(z)
                $(".ik-edit-modal-close").click(function(e){
                    e.preventDefault()
                    $("#ik-edit-modal").fadeOut()
                })
                $("#ik-btn-edit-cat").click(function(e){
                    var data = {
                        "id":y,
                        "tableName":"sizes",
                        "name":"size_name",
                        "idd": "size_id",
                        "btn":true,
                        "value": $("#ik-catt-edit").val()
                    }
                    ajaxCB("updateCategories.php", data, "POST");
                })

            }
            
        })
     }
     if(url=="/projects/PHP1-sajt/cart.php"){
      $("#buyBtnCart").click(function(){
          var a=$("#proIds").val();
          var b =$("#userId").val();
          console.log(a)
          console.log(b);
      })

     }
     if(url =="/projects/PHP1-sajt/contact.php"){
         $("#btnCus").click(function(){
             var error = 0
 
             var nameField = $("#tbName")
             var nameValue = nameField.val()
             var nameRegEx = /^[A-Z][a-z]{2,15}(\s[A-Z][a-z]{2,15})?$/
             checkRegex(nameRegEx, nameField, nameValue)
 
             var lastField = $("#tbLast")
             var lastValue = lastField.val()
             var lastRegEx = /^[A-Z][a-z]{2,15}(\s[A-Z][a-z]{2,15})?$/
             checkRegex(lastRegEx, lastField, lastValue)
 
             var emailField = $("#tbMail");
             var emailValue = emailField.val();
             var emailRegEx = /^[a-z][\w\.\-]+\@[a-z0-9]{2,15}(\.[a-z]{2,4}){1,2}$/;
             checkRegex(emailRegEx, emailField, emailValue);

             if($("#tbMessage").val().length>5){
                 insertSuccess($("#tbMessage"))
             }else{
                 insertDanger($("#tbMessage"))
                 error++
             }
             if(error == 0){
                 let sendData = {
                     "fName": $(nameField).val(),
                     "lName": $(lastField).val(),
                     "cEmail": $(emailField).val(),
                     "message": $("#tbMessage").val(),
                     "btn": true
                 }
                 ajaxCB("pcontact.php",sendData, "POST");
             }
             
            function checkRegex(reg, field, value){
                 if(reg.test(value)){
                     insertSuccess(field);
                 }else{
                     error++
                     insertDanger(field);
                 }
            }
            function insertSuccess(field){
                 field.next().remove()
                 $("<p class='ik-no-margin-bot ik-alert alert-success'><i class='fas fa-check-circle'></i></p>").insertAfter(field);
            }
            function insertDanger(field){
                 field.next().remove()
                 $("<p class='ik-no-margin-bot ik-alert alert-danger'><i class='fas fa-check-circle'></i></p>").insertAfter(field);
            }
         })
     }
     if(url =="/projects/PHP1-sajt/shop.php"){

         $.post("getDataProducts.php" , function(data){
            localStorage.setItem("products",JSON.stringify(data))
            localStorage.setItem("prod", JSON.stringify(data))
            console.log(data);
        }).fail(function(){
            alert("Cant load page. Please try later!");
        });
        $("#btn-filter").click(function(){
            var brand = $("#ddlBrands").val()
            var sort = $("#ddlSort").val()
            var valCat = []
            $(".categories:checked").each(function(){
                valCat.push(Number($(this).val()))
            })
            var valSiz = []
            $(".sizes:checked").each(function(){
                valSiz.push(Number($(this).val()))
            })
            valCat = JSON.stringify(valCat)
            valSiz = JSON.stringify(valSiz)
            let sendData = {
                "brandId": brand,
                "sortId": sort,
                "categoryId": valCat,
                "sizeId": valSiz,
                "btn": true
            }
            $.ajax({
                url:"filter.php",
                method:"POST",
                data: sendData,
                dataType: "json",
                success:function(result){
                    localStorage.setItem("products",JSON.stringify(result))
                    document.location.reload()
                },
                error: function(xhr){
                    console.log(xhr)
                }
            })
        })
        console.log(dataProd)
        var dataProd = JSON.parse(localStorage.getItem("products"));
        showProducts(dataProd)
        $(".ik-page").click(function(e){
            e.preventDefault();

            let limit = $(this).data("limit")
            let data = {
                "limit": limit
            }

            $.ajax({
                method: "POST",
                url:"paganacion.php",
                dataType: "json",
                data:data,
                success: function(data){
                    localStorage.setItem("products",JSON.stringify(data.products))
                    document.location.reload();
                    printPaganation(data.num);
                },
                error: function(xhr){
                    console.log(xhr);
                }
            })

        })
        function showProducts(data){
            var str= ""
            if(data.length == 0){
                str=`<div class="col-12">
                        <h2 class="text-center alert alert-info">Sorry, we dont have such product</h2>
                        
                    </div`;
            }else{
                console.log(data);
                for(product of data){
                    str+=`<div class="col-md-4 col-sm-6 col-12 ik-item-div mb-3">
                                <div class="ik-item shadow">
                                    <img src="${product.prod_image_href}" alt=${product.prod_img_alt} class="img-fluid ik-img"/>
                                    <div class="ik-item-body px-4">
                                        <p>${product.prod_name}</p>
                                        <p class="mb-2">${product.brand_name}</p>
                                    </div>
                                    <div class="ik-item-body px-4 d-flex justify-content-between">
                                        <p>$${product.prod_price_new}</p>
                                        <s>$${product.prod_price_old}</s>
                                    </div>
                                    <div class="ik-item-footer px-2 py-2">
                                        <form action="manageCart.php" method="POST">
                                        
                                        <input type="hidden" name="name" value="${product.prod_name}"/>
                                        <input type="hidden" name="price" value="${product.prod_price_new}"/>
                                        <input type="hidden" name="img" value="${product.prod_image_href}"/>
                                        <input type="hidden" name="idd" value="${product.prod_id}"/>
                                        <input class="btn btn-secondary rounded-0 ik-buy-button mb-1" type="submit" value="Add to Cart" name="btn"/>
                                        </form>
                                        <a href="#" class="btn btn-outline-primary rounded-0 ik-see-more-btn mb-1" onclick="seeMore(${product.prod_id})" data-product-id="${product.id}">See More</a>
                                    </div>
                                </div>
                            </div>`
                    
                }
            }
            $(".ik-products-div").html(str);
        }
     }
     function printPaganation(num){
        var html=""
        for(let i=0; i<num; i++){

            html+= `<li class="page-item"><a class="page-link ik-page" data-limit ="${i}" href="#">${i+1}</a></li>`
        }

        $("#ik-pagin").html(html)
     }
});
function seeMore(id){
    var dataProd = JSON.parse(localStorage.getItem("prod"));
    var item = dataProd.filter(x=> x.prod_id == id);
    var html=""
    item.forEach(i=>{
        html+=`<div class="d-flex flex-wrap">
                    <div class="col-12 col-md-6">
                        <img src="${i.prod_image_href}" alt="${i.prod_img_alt}" class="img-fluid ik-img-see-more">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2>${i.prod_name}</h2>
                        <p></p>
                        <p></p>
                        <p class="mb-2">
                        ${i.prod_description}
                        </p>
                        <a href="#" class="btn btn-danger align-self-end mr-4" id="ik-close-btn">Close</a>
                    </div>
                </div>`
    })
    $("#ik-modal").html(html);
    $("#ik-modal").fadeIn();
    $("#ik-close-btn").click(function(){
        $("#ik-modal").fadeOut();
    })
}
function deleteItem(x){
    var data = {
        "id": x,
        "btn": true
    }
    ajaxCB("deleteAdminProd.php",data,"POST");
}
function editItem(id){
    $("#ik-edit-prod-modal").fadeIn();
    $(".ik-edit-modal-btn-close").click(function(){
        $("#ik-edit-prod-modal").fadeOut();
    })
    var dataProd = JSON.parse(localStorage.getItem("prod"));
    var filteredItem  =  dataProd.filter(x=> x.prod_id == id);
    filteredItem.forEach(f=>{
        $("#tbProdName").val(f.prod_name);
        $("#tbImgAlt").val(f.prod_img_alt);
        $("#prodDes").val(f.prod_description);
        $("#prodPN").val(f.prod_price_new)
        $("#prodPO").val(f.prod_price_old)

    })

    $("#btnEditProd").click(function(){

        var data = {
            "btn": true,
            "id": id,
            "tbProdName": $("#tbProdName").val(),
            "tbImgAlt": $("#tbImgAlt").val(),
            "prodDes": $("#prodDes").val(),
            "prodPN": $("#prodPN").val(),
            "prodPO": $("#prodPO").val(),
        }
        ajaxCB("editProd.php", data, "POST")
    })
    
    
    
}
function ajaxCB(url,data, method){
    $.ajax({
        url: url,
        data: data,
        method: method,
        dataType: "json",
        success: function(result){
            $("#contact-response").html(result.resMessage);
            $(".ik-contact-modal").fadeIn();
            $(".ik-contact-modal-close").click(function(){
                $(".ik-contact-modal").fadeOut();
            })
            
        },
        error: function(xhr){
            if(xhr.status == 422){
                var y = JSON.parse(xhr.responseText)
                $("#contact-response").html(y.resMessage);
                $(".ik-contact-modal").fadeIn();
                $(".ik-contact-modal-close").click(function(){
                    $(".ik-contact-modal").fadeOut();
                })
            }
            if(xhr.status == 500){
                var y = JSON.parse(xhr.responseText)
                $("#contact-response").html(y.resMessage);
                $(".ik-contact-modal").fadeIn();
                $(".ik-contact-modal-close").click(function(){
                    $(".ik-contact-modal").fadeOut();
                })
            }
        }
    })
}
var a=document.querySelectorAll("#ik-price");
var b=document.querySelectorAll("#ik-quantity")
var c =document.querySelectorAll(".ik-total-item");
var d = document.querySelector("#ik-tot");

function subTotal(){

    var tot=0;
    for(let i=0; i<a.length;i++){
        c[i].innerHTML=a[i].value*b[i].value;
        tot += a[i].value*b[i].value;
    }
    d.innerHTML=tot;
}