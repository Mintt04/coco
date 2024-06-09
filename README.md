








































Public Class Form1
Private Sub AboutToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles AboutToolStripMenuItem.Click
MessageBox.Show("This is created by Yuvanes")
End Sub
Private Sub btnCalculate_Click(sender As Object, e As EventArgs) Handles btnCalculate.Click
Try
Dim name As String
name = UCase(txtName.Text)
Dim gender As String
gender = cboGender.Text
Dim phone As String
phone = txtPhone.Text
Dim course As String
course = cbCourse.Text
Dim semester As String
semester = txtSem.Text
Dim fee As String
fee = txtFEE.Text
Dim total As String
total = txtFEE.Text * txtSem.Text
txtShow.Text = "Name : " + name.ToString + vbNewLine + "Gender : " + gender.ToString + vbNewLine + "Phone : " + phone.ToString + vbNewLine + "Course : " + course.ToString + vbNewLine +
"Semester : " + semester.ToString + vbNewLine + "Fee : RM" + total.ToString
Catch ex As Exception
End Try
MsgBox("Error. Please fill up all details.")
End Sub
Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
Me.Close()
End Sub
End Class
