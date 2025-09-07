var builder = WebApplication.CreateBuilder(args);

// Add services to the container.
builder.Services.AddControllersWithViews();

// Configure logging to help diagnose issues
builder.Services.AddLogging(logging =>
{
    logging.AddConsole(); // Logs to stdout, visible in Azure logs
});

var app = builder.Build();

// Configure the HTTP request pipeline.
if (!app.Environment.IsDevelopment())
{
    app.UseExceptionHandler("/Home/Error");
    app.UseHsts();
}

app.UseHttpsRedirection();
app.UseRouting();
app.UseAuthorization();
app.MapStaticAssets();

// Add a health check endpoint for Azure
app.MapGet("/health", () => Results.Ok("Healthy"));

// Map the default controller route
app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}")
    .WithStaticAssets();

// Bind to the port specified by Azure (default to 8080 if not set)
var port = Environment.GetEnvironmentVariable("PORT") ?? "8080";
Console.WriteLine($"Binding to port: {port}"); // Log the port for debugging
app.Urls.Add($"http://+:{port}");

app.Run();
