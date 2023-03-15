#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
  if (argc < 2) {
    cerr << "Error: no input provided." << endl;
    return 1;
  }
  string input = argv[1];
  cout << "You entered: " << input << endl;
  return 0;
}