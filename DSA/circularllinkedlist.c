class Node:
    def __init__(self, data):
        """Initialize a node with data and a pointer to the next node."""
        self.data = data
        self.next = None

class CircularLinkedList:
    def __init__(self):
        """Initialize an empty circular linked list."""
        self.head = None

    def append(self, data):
        """Add a new node at the end of the circular linked list."""
        new_node = Node(data)
        if self.head is None:
            # If the list is empty, set head to new_node and point next to itself
            self.head = new_node
            new_node.next = new_node  # Circular reference
        else:
            current = self.head
            # Traverse the list to find the last node
            while current.next != self.head:
                current = current.next
            current.next = new_node  # Link last node to new node
            new_node.next = self.head  # Make it circular by linking back to head

    def display(self):
        """Print the elements of the circular linked list."""
        if self.head is None:
            print("The list is empty")
            return
        current = self.head
        while True:
            print(current.data, end=" -> ")
            current = current.next
            if current == self.head:
                break
        print(f"(Back to {self.head.data})")  # Indicate circular nature