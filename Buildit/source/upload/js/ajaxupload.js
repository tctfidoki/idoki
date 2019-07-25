function ajaxImgUpload() {
    var formData =  new FormData(document.getElementById("form"));
    formData.append('file',$(':file')[0].files[0]);
    $.ajaxFileUpload
    (
        {
            url:'../action.php', //处理上传文件的后台文件
            type:'POST',
            data: formData,
            cache: false,
            //secureuri:false,
            //fileElementId:'pic',
            //dataType: 'json',
            //data: formData,
            contentType: false, //禁止设置请求类型
            processData: false, //禁止jquery对DAta数据的处理,默认会处理
            success: function (data)
            {
                //对返回结果的处理程序
                alert("操作成功");
            },
            error:function(e){
                alert("error")
                //对返回结果的处理程序
            }

        }

    )

}
