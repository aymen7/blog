/**
 * Created by user on 17/09/2017.
 */
$(document).ready(function () {
    // .real-page-item is use for page items without the previous and nest elements
    var page_items=$('.real-page-item'),id;
    function clickedItem() {
        page_items.each(function () {
            $(this).click(function () {
                id=$(this).attr("id");
                console.log("clicked id :"+id);

            });//clicked
        });//each
        page_items.each(function () {
            console.log("current elemnt id :"+$(this).attr("id"));
            if($(this).attr("id")==id){
                $(this).addClass('active');
            }
            else {
                $(this).removeClass('active');
            }
        });
    }//clickedItem()

    function addActiveClass() {
        clickedItem();

    }
 addActiveClass();

});//document ready()