var progressContainer = document.querySelector(".progress_upload");
var progressMessage = document.querySelector(".progress_upload_message");

function uploadFileImages(id)
{
    xmlHttpRequest = getHttpRequest();

    var url = "../../../Controleur/database_resource/upload.php";

    var file_path = document.getElementById(id);
    var file_upload = file_path.files[0];

    showProgressBar();

    getBase64(file_upload, function(result)
    {
        var image = document.getElementById("images_" + id);

        var file_name = file_path.value;

        file_name = file_name.replace("C:\\fakepath\\", ''); // Removal of unnecessary characters 
        file_name = file_name.replace(/ /g,"_"); // Replace te spaces with an underscore

        xmlHttpRequest.open("POST", url, true);
        xmlHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        if (file_upload.type == "image/png")
        {
            file_upload = result;
            file_upload = file_upload.replace('data:image/png;base64,', '');

            xmlHttpRequest.onreadystatechange = function() 
            {
                if(xmlHttpRequest.readyState == XMLHttpRequest.DONE && xmlHttpRequest.status == 200) 
                {
                    hideProgressBar();
                    image.src = result;
                }
            };

            var params = "id=" + id + "&file_name=" + file_name + "&file_upload=" + encodeURIComponent(file_upload);
            
            xmlHttpRequest.send(params);
        }
        else if (file_upload.type == "image/jpeg")
        {
            file_upload = result;
            file_upload = file_upload.replace('data:image/jpeg;base64,', '');

            xmlHttpRequest.onreadystatechange = function() 
            {
                if(xmlHttpRequest.readyState == XMLHttpRequest.DONE && xmlHttpRequest.status == 200) 
                {
                    hideProgressBar();
                    image.src = result;
                }
            };

            var params = "id=" + id + "&file_name=" + file_name + "&file_upload=" + encodeURIComponent(file_upload);
            
            xmlHttpRequest.send(params);
        }
    });
}

// I created this method for get the code in base 64 for uploading the image encoded on BDD
function getBase64(file, callback) 
{
    var reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = function () 
    {
        callback(reader.result);
    };
    reader.onerror = function (error) 
    {
        console.log('Error: ', error);
    };
}

function replaceText(id, place, source)
{
    var url = "../../../Controleur/database_resource/replace.php";

    xmlHttpRequest = getHttpRequest();
    xmlHttpRequest.open("POST", url, true);
    xmlHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlHttpRequest.onreadystatechange = function() 
    {
        if(xmlHttpRequest.readyState == XMLHttpRequest.DONE && xmlHttpRequest.status == 200) 
        {
            var value_textarea = document.getElementById("textarea_" + id + "_" + place);
            var message_p = document.querySelector(".p_" + id + "_" + place);
            var tag_a = document.getElementById("a_" + id + "_" + place);

            message_p.innerHTML = (place+1) + ". " + value_textarea.value;
            value_textarea.innerHTML = value_textarea.value;
            if (tag_a.getAttribute("onclick"))
            {
                tag_a.setAttribute("onclick", 'javascript:replaceText(' + id + ', ' + place + ', ' + '\"' + value_textarea.value + '\"' + ');');
            }
        }
    };

    var textarea = document.getElementById("textarea_" + id + "_" + place);

    var params = "id=" + encodeURIComponent(id) + "&value_textarea=" + encodeURIComponent(textarea.value) + "&source=" + encodeURIComponent(source);

    xmlHttpRequest.send(params);
}

function replaceNumber(id, column, title)
{
    var url = "../../../Controleur/database_resource/replacenumber.php";

    xmlHttpRequest = getHttpRequest();
    xmlHttpRequest.open("POST", url, true);
    xmlHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlHttpRequest.onreadystatechange = function()
    {
        if (xmlHttpRequest.readyState == XMLHttpRequest.DONE && xmlHttpRequest.status == 200)
        {
            var value_textarea = document.getElementById("textarea_" + id);
            var message_p = document.querySelector(".p_" + id);
            var tag_a = document.getElementById("a_" + id);

            message_p.innerHTML = title + " : " + value_textarea.value;
            value_textarea.innerHTML = value_textarea.value;
            if (tag_a.getAttribute("onclick"))
            {
                tag_a.setAttribute("onclick", 'javascript:replaceNumber(' + id + ',' + '\"' + column + '\"' + ',' + '\"' + title + '\"' + ');');
            }
        }
    }

    var textarea = document.getElementById("textarea_" + id);

    var params = "id=" + encodeURIComponent(id) + "&column=" + encodeURIComponent(column) + "&value_textarea=" + encodeURIComponent(textarea.value);

    xmlHttpRequest.send(params);
}

function showProgressBar()
{
    progressContainer.style.visibility = "visible";
    progressContainer.style.opacity = 1;
}

function hideProgressBar()
{
    progressMessage.innerHTML = "Réussi !";

    setTimeout(function()
    {
        progressContainer.style.opacity = 0;
        progressContainer.style.visibility = "hidden";

        setTimeout(function()
        {
            progressMessage.innerHTML = "Mise en ligne en cours...";
        }, 1000);
    }, 1500);
}

function getHttpRequest()
{
    return window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
}

function logout()
{
    var url = "../../../Controleur/database_resource/logout.php";

    xmlHttpRequest = getHttpRequest();
    xmlHttpRequest.open("POST", url, true);
    xmlHttpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlHttpRequest.onreadystatechange = function()
    {
        if (xmlHttpRequest.readyState == XMLHttpRequest.DONE && xmlHttpRequest.status == 200)
        {
            window.location.href = "../../../Vue/Html/administration/form_admin.php";
        }
    }

    xmlHttpRequest.send();
}