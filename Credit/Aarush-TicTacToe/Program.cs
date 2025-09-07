using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Http;
using Microsoft.Extensions.Hosting;
using System.Linq;

var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

// ------------------ Tic Tac Toe ------------------
char[] board = Enumerable.Repeat(' ', 9).ToArray();
char currentPlayer = 'X';

string CheckWinner(char[] b)
{
    int[,] wins = new int[,] {
        {0,1,2}, {3,4,5}, {6,7,8}, // rows
        {0,3,6}, {1,4,7}, {2,5,8}, // cols
        {0,4,8}, {2,4,6}           // diagonals
    };

    for (int i = 0; i < 8; i++)
    {
        if (b[wins[i,0]] != ' ' && b[wins[i,0]] == b[wins[i,1]] && b[wins[i,1]] == b[wins[i,2]])
            return $"{b[wins[i,0]]} Wins!";
    }

    if (b.All(c => c != ' '))
        return "It's a Draw!";

    return "";
}

// Home page = Tic Tac Toe board
app.MapGet("/", () =>
{
    var winner = CheckWinner(board);

    var html = @"
    <html>
    <head><title>Tic Tac Toe</title></head>
    <body style='font-family:sans-serif;'>
        <h1>Tic Tac Toe</h1>";

    if (!string.IsNullOrEmpty(winner))
    {
        html += $"<h2>{winner}</h2><p><a href='/reset'>Play Again</a></p>";
    }
    else
    {
        html += $"<h3>Current Player: {currentPlayer}</h3><table border='1' cellpadding='20'>";
        for (int row = 0; row < 3; row++)
        {
            html += "<tr>";
            for (int col = 0; col < 3; col++)
            {
                int idx = row * 3 + col;
                if (board[idx] == ' ')
                    html += $"<td><a href='/move/{idx}'>[ ]</a></td>";
                else
                    html += $"<td>{board[idx]}</td>";
            }
            html += "</tr>";
        }
        html += "</table>";
    }

    html += "</body></html>";

    return Results.Content(html, "text/html");
});

// Make a move
app.MapGet("/move/{index}", (int index) =>
{
    if (index >= 0 && index < 9 && board[index] == ' ' && string.IsNullOrEmpty(CheckWinner(board)))
    {
        board[index] = currentPlayer;
        currentPlayer = (currentPlayer == 'X') ? 'O' : 'X';
    }
    return Results.Redirect("/");
});

// Reset the board
app.MapGet("/reset", () =>
{
    board = Enumerable.Repeat(' ', 9).ToArray();
    currentPlayer = 'X';
    return Results.Redirect("/");
});

app.Run();
