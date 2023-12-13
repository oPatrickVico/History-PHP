# History-PHP

Simple PHP class that (poorly) implements the memento pattern for undo/redo features.

## How to use it

The class has three methods:

- addHistory: Takes the state you want to register. Everytime the state is changed, new history must be added;
- undo: Returns the previous state;
- redo: Returns the state ahead.
