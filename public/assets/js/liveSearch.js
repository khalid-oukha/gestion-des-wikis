//search for projects
$(document).ready(function(){
    $("#searchinput").keyup(function(){
        var input = $(this).val();
        if(input != ""){
            $.ajax({
                url:"Articles/livesearch",
                method:"post",
                data: { query: input },
                success: function(res){
                    // console.log(JSON.parse(res));
                    displayWikis(JSON.parse(res));
                }
            });
        }
    })

});

function displayWikis(article){
    let articleContainer = document.getElementById("articleContainer");
    articleContainer.innerHTML="";
    article.forEach(article => {
        articleContainer.innerHTML +=`
        <div class="mt-6 ">
        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 ">
            <div class="flex items-center justify-between"><span class="font-light  text-gray-600"> ${article.created_at}
                </span><a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">${article.NAME}</a>
            </div>
            <div class="mt-2"><a href="#" class="text-2xl font-bold dark:text-neutral-50 text-gray-700 hover:underline">
            ${article.title}</a>
                <p class="mt-2 dark:text-neutral-50 text-gray-600">${article.description}</p>
            </div>
            <div class="flex items-center justify-between mt-4"><a href="#" class="text-blue-500 dark:text-neutral-50 hover:underline ">Read more</a>
                <div><a href="#" class="flex items-center">
                        <h1 class="font-bold text-gray-700 hover:underline dark:text-neutral-50">${article.full_Name}</h1>
                    </a></div>
            </div>
        </div>
    </div>
        `
    });
}