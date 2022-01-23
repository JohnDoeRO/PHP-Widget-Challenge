# PHP-Widget-Challenge

Widget Company is a widget wholesaler. They sell widgets in a variety of pack sizes:
● 250 widgets
● 500 widgets
● 1,000 widgets
● 2,000 widgets
● 5,000 widgets
Their customers can order any number of widgets, but they will always be given complete packs.
The company wants to be able to fulfil all orders according to the following rules:
1. Only whole packs can be sent. Packs cannot be broken open.
2. Within the constraints of Rule 1 above, send out no more widgets than necessary to fulfil the order.
3. Within the constraints of Rules 1 & 2 above, send out as few packs as possible to fulfil each order.


-------------------------------------------------------
So, for example:

Number of Widgets ordered 1
Correct packs to send 250 x1
Incorrect solution(s) 500 x 1 (too many widgets)

Number of Widgets ordered 250
Correct packs to send 250 x1
Incorrect solution(s) 500 x 1 (too many widgets)

Number of Widgets ordered 251
Correct packs to send 500 x1
Incorrect solution(s) 250 x 1 (too many packs)
! Pay attention to this one – manypeople get this wrong!

Number of Widgets ordered 501
Correct packs to send 500 x 1, 250 x 1
Incorrect solution(s) 1,000 x 1 (too many widgets), 250 x 3 (too many packs)

Number of Widgets ordered 12,001
Correct packs to send 5,000 x 2, 2,000 x 1, 250 x 1
Incorrect solution(s) 5,000 x 3 (too many widgets)
-------------------------------------------------------

Write a program that will tell Widgets Company what packs to send out, for any given order size.
Keep your program flexible, so that new pack sizes may be added, or existing pack sizes changed
or discarded, at a later date with minimal adjustments to your program. Be sure to test that the
rules still work as intended with a different a different pack configuration!