$.getJSON('data/DataPenonton.json', function (data){
    
    $.each(data, function(i, data){
        console.log(data.nama);
    })
})