defmodule Solution do
    def sum(x, y) do
        x + y
    end
end

x = IO.gets(nil) |> String.trim() |> String.to_integer()
y = IO.gets(nil) |> String.trim() |> String.to_integer()

Solution.sum(x, y) |> IO.puts()
