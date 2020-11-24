#!/bin/ruby

require 'json'
require 'stringio'

def utopian_tree(n)
    p = 2 ** (n / 2.0).ceil
    p * 2 - (n.even? ? 1 : 2)
end

fptr = File.open(ENV['OUTPUT_PATH'], 'w')

t = gets.to_i

t.times do |t_itr|
    n = gets.to_i

    result = utopian_tree n

    fptr.write result
    fptr.write "\n"
end

fptr.close()
