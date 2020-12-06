defmodule Solution do
    def main do
        n = IO.gets(nil)
        |> String.trim
        |> String.to_integer
        
        Enum.each(1..n, fn _ -> 
            IO.gets(nil)
            |> String.trim
            |> String.to_integer
            |> solution
            |> IO.puts 
        end)
    end
    
    def solution(n) do
        p = n / 2 |> Float.ceil
        p = :math.pow(2, p)
        p * 2 - operator(n)
        |> round
    end

    defp operator(n) when 1 == rem(n, 2), do: 2
    defp operator(n) when 0 == rem(n, 2), do: 1
end

Solution.main
