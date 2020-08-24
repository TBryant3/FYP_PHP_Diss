//Query to get the choices being dragged in question 1
const draggableContentQ1 = document.querySelectorAll('.draggableContentQ1');
// Query zone1 to be main dropzone into during question 1
const dropZonesQ1 = document.querySelector('.dropZoneQ1');

//Query to get the element being dragged in question 2
const draggableContentQ2 = document.querySelectorAll('.draggableContentQ2');
// Query zone2 to be dropped into during question 2
const dropZonesQ2 = document.querySelector('.dropZoneQ2');

//Query to get the choices being dragged in question 3
const draggableContentQ3 = document.querySelectorAll('.draggableContentQ3');
// Query zone3 to be main dropzone into during question 3
const dropZonesQ3 = document.querySelector('.dropZoneQ3');


let draggedItem = null;

// For loop to run for each draggable element
for (let i = 0; i < draggableContentQ1.length; i++)
{
    const content1 = draggableContentQ1[i];

    content1.addEventListener('dragstart', function()
    {
        draggedItem = content1;
        setTimeout(function()
        {
            content1.style.display = 'none';
        },0);
    });
    content1.addEventListener('dragend', function()
    {
        setTimeout(function()
        {
            content1.style.display = 'block';
            draggedItem = null;
        }, 0);
    });
    // Prevent default options of the dropzone to allow drop procedure
    dropZonesQ1.addEventListener('dragover', function(e)
    {
        e.preventDefault();
    });
    // Add colour change of div so users know they're above a droppable zone
    dropZonesQ1.addEventListener('dragenter', function(e)
    {
        e.preventDefault();
        this.style.background = "rgba(0,0,0,0.2)";
    });
    // Once leaving the div, change colour back to same as body
    dropZonesQ1.addEventListener('dragleave', function()
    {
        this.style.background = "lightslategrey";
    });
    dropZonesQ1.addEventListener('drop', function()
    {
        this.append(draggedItem);
        this.style.background = "lightslategrey";
        this.style.pointerEvents = 'none';

        checkAnswer1();
    });
}
// Function to see if th user has dropped the correct answer or not
function checkAnswer1()
{
    if (draggedItem === draggableContentQ1[0])
    {
        document.getElementById('correct1').style.display = 'block';
    }
    else
    {
        document.getElementById('wrong1').style.display = 'block';
    }
}

////////////////////////////////////////////////////
// Question 2
for (let i = 0; i < draggableContentQ2.length; i++)
{
    const content2 = draggableContentQ2[i];

    content2.addEventListener('dragstart', function()
    {
        draggedItem = content2;
        setTimeout(function()
        {
            content2.style.display = 'none';
        },0);
    });
    content2.addEventListener('dragend', function()
    {
        setTimeout(function()
        {
            content2.style.display = 'block';
            draggedItem = null;
        }, 0);
    });
    // Prevent default options of the dropzone to allow drop procedure
    dropZonesQ2.addEventListener('dragover', function(e)
    {
        e.preventDefault();
    });
    // Add colour change of div so users know they're above a droppable zone
    dropZonesQ2.addEventListener('dragenter', function(e)
    {
        e.preventDefault();
        this.style.background = "rgba(0,0,0,0.2)";
    });
    // Once leaving the div, change colour back to same as body
    dropZonesQ2.addEventListener('dragleave', function()
    {
        this.style.background = "lightslategrey";
    });
    dropZonesQ2.addEventListener('drop', function()
    {
        this.append(draggedItem);
        this.style.background = "lightslategrey";
        this.style.pointerEvents = 'none';

        checkAnswer2();
    });
}
// Function to see if th user has dropped the correct answer or not
function checkAnswer2()
{
    if (draggedItem === draggableContentQ2[1])
    {
        document.getElementById('correct2').style.display = 'block';
    }
    else
    {
        document.getElementById('wrong2').style.display = 'block';
    }
}
////////////////////////////////////////////////////
// Question 3
for (let i = 0; i < draggableContentQ3.length; i++)
{
    const content3 = draggableContentQ3[i];

    content3.addEventListener('dragstart', function()
    {
        draggedItem = content3;
        setTimeout(function()
        {
            content3.style.display = 'none';
        },0);
    });
    content3.addEventListener('dragend', function()
    {
        setTimeout(function()
        {
            content3.style.display = 'block';
            draggedItem = null;
        }, 0);
    });
    // Prevent default options of the dropzone to allow drop procedure
    dropZonesQ3.addEventListener('dragover', function(e)
    {
        e.preventDefault();
    });
    // Add colour change of div so users know they're above a droppable zone
    dropZonesQ3.addEventListener('dragenter', function(e)
    {
        e.preventDefault();
        this.style.background = "rgba(0,0,0,0.2)";
    });
    // Once leaving the div, change colour back to same as body
    dropZonesQ3.addEventListener('dragleave', function()
    {
        this.style.background = "lightslategrey";
    });
    dropZonesQ3.addEventListener('drop', function()
    {
        this.append(draggedItem);
        this.style.background = "lightslategrey";
        this.style.pointerEvents = 'none';

        checkAnswer3();
    });
}
// Function to see if th user has dropped the correct answer or not
function checkAnswer3()
{
    if (draggedItem === draggableContentQ3[1])
    {
        document.getElementById('correct3').style.display = 'block';
    }
    else
    {
        document.getElementById('wrong3').style.display = 'block';
    }
}

$("#yellowBelt").click(function()
{
    $("#yellowGlobal").toggle("slide");
});