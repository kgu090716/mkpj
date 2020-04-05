function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var adr = getParameterByName('address');


$(document).ready(function(){
    $('#userTable').dataTable({
        pageLength: 10,
        bPaginate: true,
        bLengthChange: true,
        lengthMenu : [ [ 10, 50, 100, -1 ], [ 10, 50, 100, "All" ] ],
        bAutoWidth: false,
        processing: true,
        ordering: true,
        serverSide: false,
        searching: true,
        "language": {
            "emptyTable": "데이터가 없어요. <br> 검색 팁 : 자동완성 기능을 활용하여 검색해 보세요. <br> 중요 : 띄어쓰기를 올바르게 입력해야 합니다!",
            "lengthMenu": "페이지당 _MENU_ 개씩 보기",
            "info": " _START_에서 _END_까지 읽음 / 총 _TOTAL_ 개",
            "infoEmpty": "데이터 없음",
            "infoFiltered": "( _MAX_건의 데이터에서 필터링됨 )",
            "search": "자세한 주소 검색: ",
            "zeroRecords": "일치하는 데이터가 없어요.",
            "loadingRecords": "로딩중...",
            "processing":     "잠시만 기다려 주세요...",
            "paginate": {
                "next": "다음",
                "previous": "이전"
            }
        },

        ajax : {
            "url":"https://8oi9s0nnth.apigw.ntruss.com/corona19-masks/v1/storesByAddr/json",
            "type":"GET",
            "data": { address: adr },
            'dataSrc':'stores'
        },
        columns : [
            {data: "addr"},
            {data: "name"},
            {data: "remain_stat",
                render: function(data){if(data == "plenty") {return "100개 이상 <span style=\"color:#10ac84\">■</span>"}
                    if(data == "some") {return "30개~100개 <span style=\"color:#f6b93b\">■</span>"}
                    if(data == "few"){return "2개~30개 <span style=\"color:#eb2f06\">■</span>"}
                    if(data == "empty") {return "1개 이하 <span style=\"color:#353b48\">■</span>"}
                    if(data == "break"){return "판매중지"}
                else {return data}},
                "defaultContent": "알수없음"
            },
            {data: "created_at",
                "defaultContent": "알수없음"
            }
        ]

    });

});

document.getElementById("hadress").innerHTML=adr;

$(document).ready(function() {
    var table = $('#userTable').DataTable();

    var agent = navigator.userAgent.toLowerCase();
    $('#userTable tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        if ( (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) || (agent.indexOf("msie") != -1) )
        {
            window.location.href="http://map.naver.com/?query="+encodeURIComponent(adr) +encodeURIComponent(data["name"]);
        }
        else {
            window.location.href = 'http://map.naver.com/?query='+adr +data["name"];
        }
    } );
} );