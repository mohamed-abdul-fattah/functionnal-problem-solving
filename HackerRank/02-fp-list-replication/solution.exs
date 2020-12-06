defmodule Solution do
    def duplicate(list, num_of_dups) do
        list
        |> Enum.map(&List.duplicate(&1, num_of_dups))
        |> List.flatten
    end
end

s = IO.gets(nil) |> String.trim |> String.to_integer
x = IO.read(:stdio, :all)
    |> String.split("\n")
    |> Solution.duplicate(s)

IO.puts(Enum.join(x, "\n"))
