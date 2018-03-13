/**
 * Created by Hs on 2018/3/7.
 */
(()=>{
    $.ajax("footer.html","get").then(html=>{
    $("#footer")[0].innerHTML=html;
});
})();