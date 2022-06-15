const redirect_user_admin = () => {
    setTimeout(function () {
      document.querySelector("#user-options").options[4].selected = "selected";
      document.querySelector(".user-options form").submit();
    }, 3000);
}