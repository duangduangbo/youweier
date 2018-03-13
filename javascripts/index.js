(() => {
    $.ajax({
    type:"GET",
    url:"data/catalog.php",
    success:function(data){
        var html="";
        html+=`<li><a href="javascript:;" class="active">推荐</a></li>`;
        for(var i=0; i< data.length;i++)
        {
            html+=`
        <li><a href="javascript:;" class=" " data-fid="${ data[i].cid }">${ data[i].cname }</a></li>`;
        }
        $("ul#nav-click").html(html);
    },
    error:function(){
        alert("network error");
    }
});
$.ajax("header.html","get").then(html=>{
    $("#header")[0].innerHTML=html;
});

})();
