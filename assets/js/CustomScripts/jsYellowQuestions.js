var id;
// //Allows for data to be dropped into the assigned area
function allowDrop(e)
{
    e.preventDefault();
}
// This sets the parameters of what is being dragged to the droppable area
function drag(ev)
{
    id= ev.target.id;
}
function drop(e)
{
    e.preventDefault();
    e.target.append(document.getElementById(id));
}

$("#yellowBelt").click(function()
{
    $("#yellowGlobal").toggle("slide");
});