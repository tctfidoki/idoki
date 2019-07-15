function beforeRegister()
{
	var username=document.getElementById('account').value;
    var password=document.getElementById('password').value;
    var repassword=document.getElementById('repassword').value;
    if (username=="") {
    	alert("用户名不能为空");
    	return false;
    }
    if (password=="") {
    	alert("密码不能为空");
    	return false;
    }

    if (password != repassword) {
        alert("两次输入的密码必须相同");
        return false;
    }

    if (password.length < 6 || password.length > 32) {
        alert("密码长度限制在6位~32位");
        return false;}

    var formData=new FormData(document.forms.namedItem("signup_form"));

    $.ajax({
        url: "../../register.php",
        type: "POST",
        data: formData,
        processData:false,
        contentType:false,
        success:function (data) {           //成功回调
            if(data == 1){
                alert("用户名已存在");
                //window.location.href="../static/signup.html";
            }
            if(data ==2){
                alert("注册成功");
                window.location.href="../static/signin.html";
            }
        }
    }).done(function(resp) {
       
    }).fail(function(err) {
        alert('fail!');
    });
	return true;
}

function beforeSubmit()
{
	var username=document.getElementById('account').value;
    var password=document.getElementById('password').value;
    if (username=="") {
    	alert("用户名不能为空");
    	return false;
    }
    if (password=="") {
    	alert("密码不能为空");
    	return false;
    }

    var formData=new FormData(document.forms.namedItem("signin_form"));

    $.ajax({
        url: "../../login.php",
        type: "POST",
        data: formData,
        processData:false,
        contentType:false,
        success:function (data) {           //成功回调  
            if(data == 1){
                alert("密码错误");
                //window.location.href="../static/signin.html";
            }
            if(data == 2){
                window.location.href="../static/pick.html";
            }
            if(data == 3){
                alert("用户名不存在");
                //window.location.href="../static/signin.html";
            }
        }
    }).done(function(resp) {

    }).fail(function(err) {
        alert('login fail!');
    });
	return true;
}
