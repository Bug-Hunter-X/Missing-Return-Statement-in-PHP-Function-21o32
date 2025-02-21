function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum; // This line is missing in the original buggy code
}

const numbers = [1, 2, 3, 4, 5];
const sum = calculateSum(numbers);
console.log(sum); // This will now correctly output 15