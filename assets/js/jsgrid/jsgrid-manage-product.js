(function($) {
    "use strict";
    $("#basicScenario").jsGrid({
        width: "100%",
        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pActionSize: 15,
        pActionButtonCount: 5,
        deleteConfirm: "Do you really want to delete the client?",
        controller: {
            loadData: function() {
                var d = $.Deferred();
 
                $.ajax({
                    type: 'POST',
                    url: "http://localhost/giftshop/admin/admin.php",
                    data:{request:'getcategories'},
                    dataType: "json"
                }).done(function(response) {
                    d.resolve(response.value);
                });
 
                return d.promise();
            }
        },
        fields: [
            {
                name: "Image",
                itemTemplate: function(val, item) {
                    return $("<img>").attr("src", val) .addClass("blur-up lazyloaded") .css({ height: 50, width: 50 }).on("click", function() {
                        $("#imagePreview").attr("src", item.Img);
                        $("#dialog").dialog("open");
                    });
                },
                insertTemplate: function() {
                    var insertControl = this.insertControl = $("<input>").prop("type", "file");
                    return insertControl;
                },
                insertValue: function() {
                    return this.insertControl[0].files[0];
                },
                align: "center",
                width: 50
            },
            { name: "Category", type: "text", width: 100},
            { name: "Status", type: "text", width: 50},
            { type: "control" }
        ]
    });
})(jQuery);
// $(function() {
 
//     $("#jsGrid").jsGrid({
//         height: "auto",
//         width: "100%",
 
//         sorting: true,
//         paging: false,
//         autoload: true,
 
//         controller: {
//             loadData: function() {
//                 var d = $.Deferred();
 
//                 $.ajax({
//                     url: "../admin/admin.php",
//                     data:{request:'getcategories'},
//                     dataType: "json"
//                 }).done(function(response) {
//                     d.resolve(response.value);
//                 });
 
//                 return d.promise();
//             }
//         },
 
        // fields: [
        //     { name: "Category", type: "text" },
        //     { name: "Status", type: "text", width: 150 },
            // { name: "Rating", type: "number", width: 50, align: "center",
            //     itemTemplate: function(value) {
            //         return $("<div>").addClass("rating").append(Array(value + 1).join("&#9733;"));
            //     }
            // },
            // { name: "Price", type: "number", width: 50,
            //     itemTemplate: function(value) {
            //         return value.toFixed(2) + "$"; }
//             // }
//         ]
//     });
 
// });