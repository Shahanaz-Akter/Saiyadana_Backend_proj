export const featureProductNav = [
    {
        id : "featureProductNav_1",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100",
        name : "Grocery",
        link : "#",
        subNavigation : false,
    },
    {
        id : "featureProductNav_2",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?q=100",
        name : "Mobiles",
        link : "#",
        subNavigation : false,
    },
    {
        id : "featureProductNav_3",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/c12afc017e6f24cb.png?q=100",
        name : "Fashion",
        link : "#",
        subNavigation : true,
    },
    {
        id : "featureProductNav_4",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?q=100",
        name : "Electronics",
        link : "#",
        subNavigation : true,
    },
    {
        id : "featureProductNav_5",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/ab7e2b022a4587dd.jpg?q=100",
        name : "Home",
        link : "#",
        subNavigation : true,
    },
    {
        id : "featureProductNav_6",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/0ff199d1bd27eb98.png?q=100",
        name : "Appliances",
        link : "#",
        subNavigation : true,
    },
    {
        id : "featureProductNav_7",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/71050627a56b4693.png?q=100",
        name : "Travel",
        link : "#",
        subNavigation : false,
    },
    {
        id : "featureProductNav_8",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/f15c02bfeb02d15d.png?q=100",
        name : "Top Offers",
        link : "#",
        subNavigation : false,
    },
    {
        id : "featureProductNav_9",
        img : "https://rukminim1.flixcart.com/flap/128/128/image/dff3f7adcf3a90c6.png?q=100",
        name : "Beauty, Toys & More",
        link : "#",
        subNavigation : true,
    },
    {
        id : "featureProductNav_9",
        img : "https://rukminim1.flixcart.com/fk-p-flap/128/128/image/05d708653beff580.png?q=100",
        name : "2-Wheelers",
        link : "#",
        subNavigation : true,
    }
]

let featureProduct_listEl = document.querySelector(".featureProduct_list")
let featureProductListHTML = ''

featureProductNav.forEach(el => {
    featureProductListHTML += `
        <div class="featureProduct_item">
            <a href="${el.link}">
                <div class="featureProduct_image">
                    <img src="${el.img}" />
                </div>
                <p class="featureProduct_name">
                    ${el.name}
                  ${el.subNavigation ? `<i class="fa-solid fa-angle-down featureProduct_icon_more"></i>` : ""}   
                </p>
            </a>
        </div>
    `
})
featureProduct_listEl.innerHTML = featureProductListHTML