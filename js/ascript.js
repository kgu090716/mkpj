function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var adr = getParameterByName('address');

alert (adr);

$(document).ready(function(){
    $('#userTable').dataTable({
        pageLength: 3,
        bPaginate: true,
        bLengthChange: true,
        lengthMenu : [ [ 3, 5, 10, -1 ], [ 3, 5, 10, "All" ] ],
        bAutoWidth: false,
        processing: true,
        ordering: true,
        serverSide: false,
        searching: true,
        ajax : {
            "url":"https://8oi9s0nnth.apigw.ntruss.com/corona19-masks/v1/storesByAddr/json",
            "type":"GET",
            "data": { address:"adr"},
            'dataSrc':'stores'
        },
        columns : [
            {data: "addr"},
            {data: "name"},
            {data: "created_at"}
        ]

    });

});
