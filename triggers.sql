# this trigger is to delete useless data in friendwaitinglist when insert friend
# Drop Trigger FRIEND;$$
create trigger FRIEND BEFORE INSERT ON `friends`
for each row
begin
delete from FDWaitingList
where (FWUserId1 = new.FUserId1 and FWUserId2 = new.FUserId2) or (FWUserId1 = new.FUserId2 and FWUserId2 = new.FUserId1);
end
$$
#this trigger is to delete date from waitinglist when a request is approved
-- Drop trigger APPROVELIST$$
-- $$
-- # this trigger is to insert user to the fansclub table once he meets the requirement
-- drop trigger approve$$
Create trigger Approve after insert on `ApproveList`
for each row
begin
if (select count(ARequestId) from `ApproveList` where RequestId = new.requestId group by RequestId) > 2
then
set @id= (select WUserId from `WaitingList` where RequestId = new.RequestId);
set @team = (select WTeamId from WaitingList where RequestId = new.RequestId);
insert into `fansclub` values(@id,@block,now());
delete from `WaitingList`
where RequestId = new.RequestId;
end if;
end
-- 

