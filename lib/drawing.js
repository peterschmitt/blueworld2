draw0Axis = function (g, width, height, d0) {
    g.beginPath();
    g.moveTo(0 + d0, height - d0);
    g.lineTo(width - d0, height - d0);
    g.moveTo(d0, d0);
    g.lineTo(d0, height - d0);
    g.lineTo(d0 + 5, height - d0 - 5);
    g.moveTo(d0, height - d0);
    g.lineTo(d0 - 5, height - d0 - 5);
    g.strokeStyle = "#000";
    g.stroke();
    drawArrow(g, 20, 20, 500, 200, 10, "#000");
}

drawBox = function (g,width,height) {
    g.beginPath();
    g.moveTo(0, 0);
    g.lineTo(0, height);
    g.lineTo(width, height);
    g.lineTo(width, 0);
    g.lineTo(0, 0);
    g.strokeStyle = "#555";
    g.stroke();
}
drawArrow = function (g, xStart, yStart, xEnd, yEnd, headerSize, strokestyle) {
    g.beginPath();
    g.moveTo(xStart, yStart);
    g.lineTo(xEnd, yEnd);
    length = getLength(xStart, yStart, xEnd, yEnd);
    xH1 = xEnd + (xStart - xEnd) / length * headerSize;
    yH1 = yEnd + (yStart - yEnd) / length * headerSize;
    xH2 = xH1 + yH1 - yEnd;
    yH2 = yH1 - xH1 + xEnd;
    xH3 = xH1 - yH1 + yEnd;
    yH3 = yH1 + xH1 - xEnd;

    g.lineTo(xH2, yH2);
    g.moveTo(xH3, yH3);
    g.lineTo(xEnd, yEnd);
    g.strokeStyle = strokestyle;
    g.stroke();
}
drawHyperbolic = function (g, a, b, t0, t1, dt) {
    g.beginPath();
    var xStart = a * Math.cosh(t0);
    var yStart = b * Math.sinh(t0);
    var xEnd;
    var yEnd;
    g.moveTo(xStart, yStart);
    for (var t = t0; t < t1; t = t + dt) {
        xEnd = a * Math.cosh(t);
        yEnd = b * Math.sinh(t);
        g.lineTo(xEnd, yEnd);
        g.moveTo(xEnd, yEnd);
    }
    g.strokeStyle = "#555";
    g.stroke();
}
getLength = function(x1,y1,x2,y2){return Math.sqrt((x1-x2)*(x1-x2)+(y1-y2)*(y1-y2));}
