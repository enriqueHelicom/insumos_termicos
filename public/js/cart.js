export function cartShopping(){
    let btnAddCart = $("#btn_cart");

    btnAddCart.on("click", function(){
        let countProductValue = $(".count-product .value").text();
        let productId = $(this).attr("data-idProduct");

        //valida si el contador es diferente de 0
        if(countProductValue != 0){
            $(".modal-form").toggleClass("modal-form__toggle");
            let formData = new FormData();
            formData.append('id',productId);
            fetchData(formData, countProductValue);
        }


    });


}

// Peticion asyn
function fetchData(data, count){
    
    fetch('http://192.168.10.48/insumos_termicos/static/db/connection.php',{
        method: "POST",
        body: data
    })
        .then(function(response){
            // Si ocurre un error en la solicitud
            if(response.status !== 200){
                console.log("Error al realizar la solicitud");
                return
            }

            // si la peticion es exitosa
            response.json().then(function(data){

             let newElement = $(".test");

             newElement.html(renderCard(data, count));

            });
        })
        .catch(function(err){
            console.log('fetch :-S', err);
        })
}


const renderCard = (data, count) =>{
    const product = {
        "id":data.id,
        "name":data.name,
        "cantidad": count
    };

    return `
            <div class="control" hidden>
                <input 
                    type="text"
                    name="count"
                    value="${product.cantidad}"
                    >
                <input 
                    type="text"
                    name="nameProduct"
                    value="${product.name}"
                    >
            </div>
            <div class="control">
                <div id="product__detail" class="product">
                    <div class="thumbnail">
                       <img src="./static/img/products/anclas refaccionarias/ANCLAS REFACCIONARIAS 1.png" alt="product">
                    </div>
                <div class="details">
                        <h6 class="title_container">${product.name}</h5>
                        <span class="title_container">${product.cantidad}</span>
                </div>
            </div>
            `;
}