const tabs = document.querySelectorAll(".container_product_header-date");
const tabsTime = document.querySelectorAll(".container_product_headerTime");
const tabTimeList = document.querySelectorAll(".container_product_headerTime--list");
const tabRoom = document.querySelectorAll(".container_product_contentsLists");
const tabInfo = document.querySelectorAll(".container_info_topTab");
const tabText = document.querySelectorAll(".container_info_text");
const tabTimeShow = document.querySelectorAll(".container_showtime_childList");
const tabShowFilm = document.querySelectorAll(".container_showtime_content");

tabs.forEach((el) => el.addEventListener("click", function (e) {
    const tabId = e.target.dataset.tab;
    tabs.forEach((el) => el.classList.remove("active"));
    e.target.classList.add("active");
    tabsTime.forEach((el) => {
        el.classList.remove("active");
        if (el.getAttribute("data-tab") === tabId) {
            el.classList.add("active");
        }
    })
}));
tabTimeList.forEach((el) => el.addEventListener("click", function (e) {
    const tabTimeListId = e.target.dataset.tab;
    tabTimeList.forEach((el) => el.classList.remove("active"));
    el.classList.add("active");
    tabRoom.forEach((el) => {
        el.classList.remove("active");
        if (el.getAttribute("data-tab") === tabTimeListId) {
            el.classList.add("active");
            tims();
        }
    });
}));
tabInfo.forEach((el) => el.addEventListener("click", function (e) {
    const tabInfoId = e.target.dataset.tab;
    tabInfo.forEach((el) => el.classList.remove("active"));
    el.classList.add("active");
    tabText.forEach((el) => {
        el.classList.remove("active");
        if (el.getAttribute("data-tab") === tabInfoId) {
            el.classList.add("active");
        };
    });
}));
tabTimeShow.forEach((el) => el.addEventListener("click", function (e) {
    const tabTimeShowId = e.target.dataset.tab;
    console.log(tabTimeShowId);
    tabTimeShow.forEach((el) => el.classList.remove("active"));
    el.classList.add("active");
    tabShowFilm.forEach((el) => {
        el.classList.remove("active");
        if (el.getAttribute("data-tab") === tabTimeShowId) {
            el.classList.add("active");
        };
    });
}));

const storyInfoTab = document.querySelectorAll(".container_user_listInfo--story");
const userTab = document.querySelectorAll(".container_user_Tab");

storyInfoTab.forEach((el) => el.addEventListener("click", function (e) {
    const storyInfoTabId = e.target.dataset.tab;
    storyInfoTab.forEach((el) => el.classList.remove("active"));
    el.classList.add("active");
    userTab.forEach((el) => {
        el.classList.remove("active");
        if (el.getAttribute("data-tab") === storyInfoTabId) {
            el.classList.add("active");
        };
    });
}));



function tims() {
    const textTimes = document.querySelector(".container_product_headerTime--list.active");
    const textTimeOne = document.querySelector(".container_product_contentsText--time");
    time = textTimes.innerHTML;
    textTimeOne.innerHTML = time;
}
const textTimeOne = document.querySelector(".container_product_contentsText--time");
const container = document.querySelector(".container_product_contents");
let countdownInterval;
tabTimeList.forEach((el) => el.addEventListener("click", function () {
    container.style.display = "block";
    if (!countdownInterval && textTimeOne.innerHTML !== "0") {
        let remainingTime = 600;
        function updateCountdown() {
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;
            document.getElementById('countdown').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            if (remainingTime > 0) {
                remainingTime--;
            } else {
                clearInterval(countdownInterval);
                alert("Time is up!");
                countdownInterval = null;
            }
        }
        countdownInterval = setInterval(updateCountdown, 1000);
    }
}));

