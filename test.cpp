#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
    string tester="Yessir";
  if (argc < 2) {
    cerr << "Error: no input provided." << endl;
    return 1;
  }
  string input = argv[1];
  cout << "1" << endl;
  return 0;
}