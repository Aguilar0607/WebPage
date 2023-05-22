let tabHeader = document.getElementsByClassName("tab-header")[0];
let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
let tabBody = document.getElementsByClassName("tab-body")[0];

let tabsPane = tabHeader.getElementsByTagName("div");

for(let i=0;i<tabsPane.length;i++){
    tabsPane[i].addEventListener("click", function(){
        // Remove active class from currently active tab
        let activeHeader = tabHeader.getElementsByClassName("active")[0];
        let activeBody = tabBody.getElementsByClassName("active")[0];
        activeHeader.classList.remove("active");
        activeBody.classList.remove("active");

        // Set a small timeout before adding the active class back
        setTimeout(function() {
            tabsPane[i].classList.add("active");
            tabBody.getElementsByTagName("div")[i].classList.add("active");

            tabIndicator.style.left = `calc(calc(100%/3) * ${i})`;
        }, 10);
    });
}

