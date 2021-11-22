function previewImg(e){
    const file = e.target.files[0];
    const localStorage = window.localStorage.getItem('img');
    if(localStorage){
        URL.revokeObjectURL(localStorage);
        window.localStorage.removeItem('img');
        e.target.parentElement.querySelector('img')?.remove();

        file.preview = URL.createObjectURL(e.target.files[0]);
        window.localStorage.setItem('img', file.preview);

        const img = document.createElement("img");   
        img.setAttribute("src",file.preview);
        img.classList.add('imgpreview');
        e.target.parentElement.append(img);

    }else{
        file.preview = URL.createObjectURL(e.target.files[0]);
        window.localStorage.setItem('img', file.preview);
        const img = document.createElement("img");  
        img.setAttribute("src",file.preview); 
        e.target.parentElement.append(img);
    }
}

function previewImgs(e){
    var files = e.target.files,
    filesLength = files.length;
    for (let i = 0; i < filesLength; i++) {
        const f = files[i]
        const fileReader = new FileReader();
        fileReader.onload = (function(e) {
        const file = e.target;
        $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
        $(".remove").click(function(){
            $(this).parent(".pip").remove();
        });
        
        // Old code here
        /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
        }).insertAfter("#files").click(function(){$(this).remove();});*/
        
        });
        fileReader.readAsDataURL(f);
    }

}
