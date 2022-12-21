function BlogKatDelete(id){
    location.href=PageName()+`?id=${id}$sil=ok`;
}

function PageName(){
    let path=location.pathname;
    let page=path.split("/").pop();
    return page;
}