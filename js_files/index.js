/**
 * Created by user on 17/09/2017.
 */
$(document).ready(function () {
    // .real-page-item is use for page items without the previous and nest elements
    function clickedItem() {
        var page_items=$('.real-page-item'),id;
        page_items.click(function (e) {
            //store the id of the clicked element
            id=$(this).attr('id');
            //loop through all the element of the list
            page_items.each(function () {
                //console.log("id for the clicked item is :"+id);
                //console.log("current element id :"+$(this).attr('id'));
                //test if the current element id is equal to the clicked id
                if($(this).attr('id')==id){
                    //console.log('enter the if');
                    $(this).addClass('active');
                }//if
                else {
                    //console.log('enter the else');
                    $(this).removeClass('active');
                }//else
            });//end of each loop

        });//end of the click event

    }//clickedItem()
    //call the function
    clickedItem();

});//document ready()