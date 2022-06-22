const redirect = (index) => {
    setTimeout(function () {
      document.querySelector("#user-options").options[index].selected = "selected";
      document.querySelector(".user-options form").submit();
    }, 3000);
}