function popup() {
alert("Hello World")
}

function AppViewModel() {
    this.changedTitle = ko.observable("changed");
    this.lastName = ko.observable("Bertington");
}

function changeTitle(){

// Activates knockout.js
ko.applyBindings(new AppViewModel());

}
jQuery("#count").fitText();