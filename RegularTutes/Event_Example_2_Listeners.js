/**
 * Created by Alexei on 22/08/14.
 */

/*
    Main DOM Event handling calls:

    we create an event handler by defining a listener
    and applying addListener() to element e (or 'elem').

    e.addEventListener(eventType, eventListener, useCapture?);
        where useCapture=true -> trigger on capture phase

    To remove an event handler, a similar syntax is employed:

    e.removeEventListener(eventType, eventListener, useCapture?);
        where arguments must be the same as when listener was added

    we dispatch a new event using

    preventDefaultCalled? = elem.dispatchEvent(event_struct)
        which returns whether any default handling has occurred
 */

//a simple, browser-independent event handling code
//that gives access to element and event structures:

function getTargetElement(evt) {    //shared function
    var elem;
    if (evt.target) {
        elem = (evt.target.nodeType == 3)
            ? evt.target.parentNode : evt.target
    }   else {
        elem = evt.srcElement; //old MSIE
    }
    return elem;
}