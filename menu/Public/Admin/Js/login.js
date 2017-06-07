document.onkeydown=function(event){
    e = event ? event : (window.event ? window.event : null);
    if(e.keyCode==13){
        //执行的方法
        checkInfo();
    }
}

//登录验证
function checkInfo(){
    var number = $('#number').val();
    var password = $('#password').val();           
    if(number==""||number==null){
        alert("账号不能为空！");
        $("#number").focus();
        return false;
    }
    if(password==""||password==null){
        alert("密码不能为空！");
        $("#password").focus();
        return false;
    }
        $.ajax({  
        type: "post",  
        url: "/menu/index.php/Admin/Login/check",
        data: {ManagerName:number,ManagerPass:password},
        dataType: 'text',  
        contentType: "application/x-www-form-urlencoded; charset=utf-8",      
        success: function(data) { 
           var obj = new Function("return" + data)(); 
                if(obj.status==1){                         
                    window.location.href="/menu/index.php/Admin/Index/index.html";
                    console.log(123);
                }else{
                     alert(obj.info);			
                }                   
            }  

        });  
}            
 
//重置
function resetInfo(){
    $('#number').val("");
    $('#password').val("");       
}
        
//工号输入限制数字
//var t = $(tid);
//t.keyup(function() {
//    var tnum = $(this).val();
//    $(this).val(tnum.replace(/\D|^0/g,''));
// }).bind("paste",function(){
// var tnum=$(this).val();
// $(this).val(tnum.replace(/\D|^0/g,''));
//});